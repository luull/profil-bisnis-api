<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);
    
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $user = Auth::user(); 
            $token = $user->createToken('API Token')->plainTextToken;
    
            return response()->json([
                'message' => 'Login successful',
                'token' => $token,
            ], 200);
        }
    
        return response()->json(['message' => 'Invalid credentials'], 401);
    }

    
        public function register(Request $request)
    {
        \Log::info('Registration data:', $request->all());
        $request->validate([
            'username' => 'required|string|unique:users,username', 
            'email' => 'required|email|unique:users,email', 
            'password' => 'required|string|min:6', 
        ]);

        // Create a new user
        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $token = $user->createToken('API Token')->plainTextToken;

        return response()->json([
            'message' => 'Registration successful',
            'token' => $token, 
        ], 201);
    }

    }
    


