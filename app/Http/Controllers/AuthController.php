<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class AuthController extends Controller
{
    public function show()
    {
        return view('welcome');
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);

        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials))
        {
            return redirect()->intended(route('home'));
        }

        return redirect(route('login'))->with('error');
    }

    public function registerPost(Request $request)
    {
        $request -> validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);

        if(!$user){
            return redirect(route('register'))->with("error", "Registration Failed");
        }

        return redirect(route('login'))->with("Success", "Registration Successful");
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }
}
