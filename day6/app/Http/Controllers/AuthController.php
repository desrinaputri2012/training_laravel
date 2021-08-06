<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('user.index', ['user' => $user]);
    }

    public function getRegister()
    {
        return view('register');
    }

    public function getLogin()
    {
        return view('login');
    }

    public function postRegister()
    {
       $user = new User();
       $user->name = request()->name;
       $user->email = request()->email;
       $user->name = bcrypt(request()->password);
       $user->save();
    }

    // public function postLogin()
    // {
    //     $credentials = request()->only('email', 'password');

    //     if (auth()->attempt($credentials)) {
    //         return redirect()->intended('/admin');
    //     }

    //     return back()->with('status', 'Gagal login');
    // }

    // public function postLogout()
    // {
    //     auth()->logout();

    //     return redirect('/login');
    // }
}
