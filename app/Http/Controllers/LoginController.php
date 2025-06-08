<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function __invoke(Request $request): RedirectResponse
    {

        $credentials = $request->validate([
            'name-email' => ['required', 'string'],
            'password' => ['required'],
        ]);

        $field = filter_var($request->input('name-email'), FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if (Auth::attempt([$field => $request->input('name-email'), 'password' => $request->input('password')], $request->input('remember'))) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'message' => 'Uneseni podaci o akreditaciji ne odgovaraju našim podacima.',
        ])->onlyInput('name-email');
    }
}
