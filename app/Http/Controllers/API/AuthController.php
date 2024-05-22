<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $login = auth()->attempt($credentials);
        if ($login) {
            $token = auth()->user()->createToken('auth_token');
            return response()->json(['token' => $token->plainTextToken]);
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }


    }

}
