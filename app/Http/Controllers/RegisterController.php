<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function __invoke(Request $request)
    {
        $userData = $request->validate([
            'username'=>['required', 'string', 'unique:users,username' ],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'confirmed', 'min:3'],
        ]);



        $userData['password'] = bcrypt($request->input('password'));
        $user = User::create($userData);
        Auth::login($user);

        return redirect()->route('dashboard');
    }
}
