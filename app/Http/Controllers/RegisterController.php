<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index() {
        return view('register');
    }

    public function store(RegisterRequest $request) {
        $user = User::create($request->all());

        Auth::login($user);

        return redirect('login');
    }
}
