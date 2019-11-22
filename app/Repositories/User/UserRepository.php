<?php

namespace App\Repositories\User;

use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Http\Request;

class UserRepository implements UserRepositoryInterface
{
    public function authenticate(Request $request)
    {
        $credentials = $request->only('name', 'password');

        try
        {
            if (!$token = JWTAuth::attempt($credentials))
            {
                return response()->json(['error' => 'Invalid credentials'], 400);
            }
        }
        catch(JWTException $e)
        {
            return response()->json(['error' => 'Could not create token'], 500);
        }

        return response()->json(compact('token'), 200);
    }
}