<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function store(Request $request){
        //validate the request using the validate method thats taken from the Controller
        $this->validate($request, [
            'name' => 'required|max:255',
            'avatar' => 'image|nullable|max:1999', #The file under validation must be an image (jpg, jpeg, png, bmp, gif, svg, or webp, double checking file type)
            'email' => 'required|email|max:255', #using email to validate again, not only on the input field so we know the passed data is of type email
            'password' => 'required|confirmed', #confirmed will look for any other class defined with _confirmation to see if they match or not
        ]);
        //not wrapping the whole validation in an if statement becuase it will throw an exception by default in there are any errors
        if($request->hasFile('avatar')){
            $fileNameWithExt = $request->file('avatar')->getClientOriginalName();
            dd($fileNameWithExt);
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('avatar')->getClientOriginalExtension();
            $filenameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('avatar')->storeAs('public/image', $filenameToStore);
        } else {
            $filenameToStore = 'default_avatar.jpg';
        }

        dd($request->file('avatar'));
        //store the user
        // User::create([
        //     'name' => $request->name,
        //     'avatar' => $request->avatar,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        // ]);

        //sign in
        //redirect
    }
}
