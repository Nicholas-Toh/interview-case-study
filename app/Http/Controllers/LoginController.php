<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('login');
    }

    /**
     * Undocumented function
     *
     * @param LoginRequest $request
     * @return Iuselluminate\Http\Response;
     */
    public function store(LoginRequest $request) {
        if (
            Auth::attempt([
                'email' => $request->email,
                'password' => $request->password,
            ], $request->remember)
        ) {
            $request->session()->regenerate();

            return redirect()->intended(route('homepage'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
