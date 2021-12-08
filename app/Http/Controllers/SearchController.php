<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
        if($request->name){
            $users = User::where('name', 'LIKE', '%'.$request->name.'%')->get();
        } else {
            $users = User::all();
        }

        return $users;
    }
}
