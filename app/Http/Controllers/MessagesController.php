<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\User;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('messages.messages');
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