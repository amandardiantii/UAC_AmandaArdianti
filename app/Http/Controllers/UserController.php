<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(){
        $users = User::all();
        return view('home', compact('users'));
    }

    public function viewProfile(){
        $user = User::find(auth()->user()->id);

        return view('woman.profile', compact('user'));
    }
}
