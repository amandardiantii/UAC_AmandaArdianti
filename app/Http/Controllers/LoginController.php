<?php

namespace App\Http\Controllers;

use App\Models\Hobby;
use App\Models\User;
use App\Models\UserHobby;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function view(){
        $hobbies = Hobby::all();
        return view('register', compact('hobbies'));
    }
    public function storeRegister(Request $request){
        $validate = $request->validate([
            'name' => 'required',
            'password' => 'required',
            'email' => 'required|unique:users',
            'phone' => 'required|number|min:11',
            'ig' => 'required',
            'gender' => 'required',
            'image' => 'required|image|file',
            'hobby1' => 'required',
            'hobby2' => 'required',
            'hobby3' => 'required',
        ]);

        $validate['image'] = $request->file('image')->store('/');
        $validate['password'] = bcrypt($validate['password']);
        User::create($validate);

        $userHobby = new UserHobby();
        $userHobby->user_id = auth()->user()->id;
        $userHobby->hobby1_id = $request->hobby1;
        $userHobby->hobby2_id = $request->hobby2;
        $userHobby->hobby3_id = $request->hobby3;

        return redirect('/login')->with('registerSuccess', 'Your account has been created');
    }

    public function storeLogin(Request $request){
        $validate = $request->validate([
            'password' => 'required',
            'email' => 'required'
        ]);

        // kl berhasil
        if(Auth::attempt($validate)){
            $request->session()->regenerate();

            //kl gagal
            return redirect()->back()->with('loginError', "Login Failed!");
        }
}
}
