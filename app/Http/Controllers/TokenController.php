<?php

namespace App\Http\Controllers;

use App\Models\User;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Lumen\Routing\Controller;

class TokenController extends Controller
{
    public function generateToken(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        try {
            if (is_null($user) || !Hash::check($request->password, $user->password)) {
                return response()->json('Invalid user or password', 401);
            }
        } catch (\Exception $e) {
            echo $e->getMessage();
        }

        $token = JWT::encode(
            ['email' => $request->email],
            env('JWT_KEY'),
            'HS256'
        );

        return [
            'access_token' => $token
        ];
    }
}
