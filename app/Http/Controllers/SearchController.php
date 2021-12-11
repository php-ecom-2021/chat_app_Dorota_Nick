<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
        if($request->name){
            $users = User::where([['name', 'LIKE', '%'.$request->name.'%']])->get();
            # add [id <> auth->user->id] if we dont want to get the current user as well
        } else {
            $users = User::all();
        }

        return $users;
    }
}
