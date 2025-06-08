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
            'username' => ['required', 'string', 'max:255', 'unique:users,username'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'invite_code' => ['required'],
            'terms' => ['accepted'],
        ], [
            'invite_code.required' => 'Pozivni kod je obavezan.',
        ]);

        $validCode = env('INVITE_CODE');
        if ($request->invite_code !== $validCode) {
            return back()->withErrors(['invite_code' => 'Pozivni kod nije ispravan.'])->withInput();
        }

        $userData['password'] = bcrypt($request->input('password'));
        $user = User::create($userData);
        Auth::login($user);

        return redirect()->route('dashboard');
    }
}
