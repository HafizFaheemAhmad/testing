<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class ProfileController extends Controller
{
    //Update Password
    public function updatePassword(Request $request)
    {
        $user = User::find(Auth::user()['id']);
        $userPassword = $user->password;
        $request->validate([
            'password' => 'required',
            'new_password' => 'required|same:confirm_password|min:6',
            'confirm_password' => 'required',
        ]);
        if (!Hash::check($request->password, $userPassword)) {
            return back()->withErrors(['current_password' => 'password not match']);
        }
        $user['password'] = Hash::make($request->new_password);

        $user->save();
        return response()->json([
            'message' => "successfully update password",
            "location" => "/login",
        ], 200);
    }

    //Get update password
    public function getPassword()
    {
        return view(
            'dashboard.security',
            ['result' => true]
        );
    }

    // Profile
    public function profile(Request $request)
    {
        $user = User::find(Auth::user()['id']);
        $this->validate($request, [
            'name' => 'required|max:255|unique:users,name,' . $user->id,
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
        ]);
        $input = $request->only('name', 'email');
        $user->update($input);
        return response()->json([
            'message' => "successfully update profile",
            "location" => "/profile",
        ], 200);
    }
    //Get Profile
    public function getProfileUpdate()
    {
        $user = (Auth::user());
        return view(
            'dashboard.profile',
            ['result' => true]
        )->with('user', $user);
    }
}
