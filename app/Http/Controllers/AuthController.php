<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class AuthController extends Controller
{

    //Login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            return response()->json([
                'message' => "successfully login",
                "location" => "/dashboard",

            ], 200);
        } else {
            return response()->json([
                "Errors" => [
                    "password" => "Invalid credentials try again"
                ]
            ], 401);
        }
    }

    //Register
    public function register(Request $request)
     {
        User::create([
            'name' => trim($request->input('name')),
            'email' => strtolower($request->input('email')),
            'password' => bcrypt($request->input('password')),
        ]);
        return response()->json([
            'message' => "successfully register",
            "location" => "/dashboard",
        ], 200);
    }
    //Logout
    public function logout()
    {
        Auth::logout();
        return redirect()->intended('login');
    }
}
