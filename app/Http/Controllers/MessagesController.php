<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessagesController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $users = User::where('id', '!=', auth()->user()->id)->get();

        return view('messages.messages', ['users' => $users]);
    }

    public function show(Request $request){

    }
}


/*
get all chats with the currently logged in user

select a user
if a chat doesnt exist, create one
else take the one that exists
*/