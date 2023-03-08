<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\UserResource;

class AuthUserController extends Controller
{
    public function auth(AuthRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        $token = $user->createToken($request->device_name)->plainTextToken;
     
        return response()->json([
            'token' => $token
        ]);
            
    }

    public function logout()
    {
        /**
         * Delete token
         */
        auth()->user()->tokens()->delete();

        return response()->json(['success' => true]);
    }

    public function me()
    {
        /**
         * Busca usuário logado
         */
        $user = auth()->user();

        /**
         * Retorna dados do usuário logado
         */
        return new UserResource($user);
    }

}
