<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class RegisterController extends Controller
{
    public function __construct(){
        $this->middleware('guest');
    }

    public function index(){
        return view('auth.register');
    }

    public function store(Request $request){
        //validate the request using the validate method thats taken from the Controller
        #dd($request->all());
        $this->validate($request, [
            'name' => 'required|max:255',
            'avatar' => 'image|nullable|max:2048', #The file under validation must be an image (jpg, jpeg, png, bmp, gif, svg, or webp, double checking file type)
            'email' => 'required|email|max:255', #using email to validate again, not only on the input field so we know the passed data is of type email
            'password' => 'required|confirmed', #confirmed will look for any other class defined with _confirmation to see if they match or not
        ]);
        //not wrapping the whole validation in an if statement becuase it will throw an exception by default in there are any errors
        
        #check if the email is taken
        $checkForUser = User::where('email', '=', $request->email)->first();
        #if it is, come back with an error
        if($checkForUser){
            return back()->with('status', 'This email is taken');
        } 
        
        if($request->file('avatar')){
            #original avatar file name
            $avatarName = $request->file('avatar')->getClientOriginalName();

            #new unique avatar name
            $newAvatarName = time().'_'.$avatarName;

            #move it to the public/images
            $request->avatar->move(public_path('images'), $newAvatarName);
        } else {
            $newAvatarName = $request->avatar;
        }
        
        //store the user
        User::create([
            'name' => $request->name,
            'avatar' => $newAvatarName,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $newAvatarName = null;
        
        //sign in
        #if signed in, get the user model
        #auth()->user(); 
        //shorter way would be
        //auth()->attempt($request->only('email', 'password'));
        auth()->attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);


        //redirect
        return redirect()->route('messages');
    }
}
