<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function getUser()
    {

        return response()->json(User::all(), 200);
    }
    public function  createUser(Request $request)
    {
        $hashPassword = Hash::make($request->password);
        
        $user = User::where("email", $request->email)->first();
        if ($user) {
            return response()->json('El usuario ya existe', 200);
        }
        $user = User::create(
            [
                'name' => $request->name,
                'email' => $request->email,
                'password' => $hashPassword,
            ]
        );
        return response()->json('user register sucsses', 200);
    }

   public function login(Request $request)
    {
        $user = User::where("email", $request->email)->first();
        if (!$user) {
            return response()->json('El usuario no existe', 200);
        }
        if (Hash::check($request->password, $user->password) == false) {
            return response()->json('La contraseña es incorrecta', 200);
        }
        $token = $user->createToken('token')->plainTextToken;
        $response = [
            'user' => $user->name,
            'token' => $token
        ];
        return response()->json($response, 200);
    }
}
