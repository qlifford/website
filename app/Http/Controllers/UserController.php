<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }    
    public function reg_user(Request $request, User $user)
    {
        $data = $request->validate([
        'name' => 'required', Rule::unique('users','name'),
        'username' => 'required', Rule::unique('users','username'),
        'email' => 'required', 'email', Rule::unique('users','email'),
        // 'phone' => 'required',
        'password' => 'required',
        ]);
        $data['password'] = bcrypt($data['password']);

        $user = User::create($data);
        auth()->login($user);

        return redirect()->route('login')->with('success', 'Registration successful!, Please Login');
        }
        public function login()
        {
            return view('auth.login');
        }
        public function log_user(Request $request)
        {
            $data = $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        if (auth()->attempt([
            'name' => $data['name'],
            'password' => $data['password']
            ]))
            {
            $request->session()->regenerate();
    
            return redirect('/');
    
            }
        }
        public function logout()
        {
            auth()->logout();
            return redirect('/');
        }
}

