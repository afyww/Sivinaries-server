<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    function vlogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        if (!Auth::attempt($request->only('email', 'password'))) {
            if ($request->wantsJson()) {
                return response()->json([
                    'message' => 'Unauthorized'
                ], 401);
            }

            return redirect()->route('login')->withErrors(['email' => 'Unauthorized']);
        }

        $user = User::where('email', $request->email)->firstOrFail();
        $token = $user->createToken('auth_token')->plainTextToken;

        if ($request->wantsJson()) {
            return response()->json([
                'message' => 'Login success',
                'access_token' => $token,
                'token_type' => 'Bearer'
            ]);
        }

        Auth::login($user);
        return redirect()->route('dashboard');
    }


    public function logout(Request $request)
    {
        if ($request->wantsJson()) {
            if ($user = Auth::user()) {
                $user->tokens()->delete(); // Revoke all tokens
            }

            return response()->json([
                'message' => 'Logged out successfully'
            ]);
        }

        // For non-JSON requests (web guard)
        if ($user = Auth::guard('web')->user()) {
            $user->tokens()->delete(); // Revoke all tokens
        }

        Auth::guard('web')->logout();
        return redirect()->route('login')->with('status', 'Logged out successfully');
    }
}
