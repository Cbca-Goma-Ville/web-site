<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Models\User;

class AuthController extends Controller
{
    /**
 * @urlParam name string required.
 * @urlParam email string required unique.
 * @urlParam password string required minimun 6 characters.
 */
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|unique:users',
            'password' => 'required|string|min:6'
        ]);

        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $user->save();
        return response()->json(["message" => "Utilisateur enregistré"], 200);

    }

/**
 * @urlParam email string required.
 * @urlParam password string required.
 */
    public function login(Request $request)
    {   
        $request->validate([
            'email' => 'required',
            'password' => 'required|string'
        ]);

        $credentials = request(['email', 'password']);

        if(!Auth::attempt($credentials)){
            return response()->json(["message" => "Non authorisé"], 404);
        }

        $accessTokens = Auth::user()->createToken('authToken')->accessToken;

        return response()->json(['data' =>[
            'user' => Auth::user(),'tokens' => $accessTokens
        ]], 200);
    }

}
