<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index(Request $request)
    {
        try {
            $request->validate([
                "email" => "required|email|unique:users,email|regex:/(.+)@(.+)\.(.+)/i",
            ]);
            auth()->login(User::create($request->only(["email", "password"])));
            $request->session()->regenerate();
            if (Auth::attempt($request->only(["email", "password"]))) {
                $request->session()->regenerate();
                return redirect()->route('home');
            } else {
                return back()->withErrors([
                    'login' => "Your login failed",
                ])->onlyInput('login');
            }
        } catch (Exception $error) {
            return back()->withErrors([
                'error' => $error->getMessage(),
            ])->onlyInput('email');
        }
    }
}
