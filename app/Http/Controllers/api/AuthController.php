<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Laravel\Passport\Passport;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // User login with username and password
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt(['name' => $request->username, 'password' => $request->password])) {
            $user = Auth::user();
            $token = $user->createToken('API Token')->accessToken;

            return response()->json(['user' => $user, 'access_token' => $token]);
        }

        return response()->json(['error' => 'Unauthorized'], 401);
    }

    // Redirect to the provider (Facebook, Google, Instagram) for social login
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->stateless()->redirect();
    }

    // Handle the callback from the provider for social login
    public function handleProviderCallback($provider)
    {
        $socialUser = Socialite::driver($provider)->stateless()->user();

        $user = User::where('email', $socialUser->email)->first();

        if (!$user) {
            $user = User::create([
                'name' => $socialUser->name,
                'email' => $socialUser->email,
                // Add other fields as needed
            ]);
        }

        $token = $user->createToken('API Token')->accessToken;

        return response()->json(['user' => $user, 'access_token' => $token]);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $token = $user->createToken('API Token')->accessToken;

        return response()->json(['user' => $user, 'access_token' => $token], 201);
    }
}