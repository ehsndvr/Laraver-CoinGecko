<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            "email" => "required|regex:/(.+)@(.+)\.(.+)/i",
            "password" =>  "required"
        ]);
        if (Auth::attempt($request->only(["email", "password"]))) {
            $request->session()->regenerate();
            return redirect()->route('home');
        } else {
            return back()->withErrors([
                'email' => 'Your email or password is incorrect',
            ])->onlyInput('email');
        }
    }
}
