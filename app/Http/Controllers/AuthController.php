<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\Auth\SignUpRequest;

class AuthController extends Controller
{
    public function signUp(SignUpRequest $request)
    {
        $validated = $request->validated();

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
            'picture' => env('AVATAR_GENERATOR_URL') . $validated['name'],
        ]);

        $token = auth()->login($user);

        if(!$token){
            return response()->json([
                'meta' => [
                    'code' => 500,
                    'status' => 'error',
                    'message' => 'Can not create user',
                ],
                'data' => [],
            ], 500);
        }

        return response()->json([
            'meta' => [
                'code' => 200,
                'status' => 'success',
                'message' => 'User created successfully',   
            ],
            'data' => [
                'user' => [
                    'name' => $user->name,
                    'email' => $user->email,
                    'picture' => $user->picture
                ],
                'access_token' => [
                    'token' => $token,
                    'type' => 'Bearer',
                    'expires_in' => strtotime('+' . auth()->factory()->getTTL() . ' minutes')
                ]
            ]    
        ]);
    }
}
