<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    
    public function register( RegisterRequest $request ) {
        // Validate
        $data = $request->validated();

        // Create user
        $user = User::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        // Return response
        return [
            'token' => $user->createToken('token')->plainTextToken,
            'user'  => $user,
        ];
    }

    public function login( LoginRequest $request ) {
        $data = $request->validated();

        // Verify password
        if( !Auth::attempt($data) ) {
            return response([
                'errors' => ['El email o el password son incorrectos'],
            ]);
        }

        // Authenticate user
        $user = Auth::user();
        return [
            'token' => $user->createToken('token')->plainTextToken,
            'user' => $user,
        ];
    }
}
