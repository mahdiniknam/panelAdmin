<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Events\UserLoggedIn;
use App\Models\User;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            event(new UserLoggedIn($user)); // اجرای ایونت
            return response()->json(['message' => 'ورود موفقیت‌آمیز!', 'user' => $user]);
        }

        return response()->json(['error' => 'نام کاربری یا رمز عبور اشتباه است.'], 401);
    }
}
