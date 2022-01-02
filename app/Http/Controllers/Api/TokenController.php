<?php

namespace App\Http\Controllers\Api;

use App\User;
use Validator;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class TokenController extends Controller
{
    public function generateToken(Request $request)
    {
        $modelRequest = new UserRequest();
        $validator = Validator::make(
            $request->all(),
            $modelRequest->rules()
        );

        if ($validator->fails()) {
            return response()->json(
                ['error' => $validator->errors()],
                406
            );
        }

        $user = User::where('email', $request->email)->first();
        if (is_null($user) || !Hash::check($request->password, $user->password)) {
            return response()->json(
                ['error' => 'Usuário ou senha inválidos'],
                401
            );
        }

        $token = JWT::encode(
            ['email' => $request->email],
            'uma_chave_muito_secreta123'
        );

        return [
            'access_token' => $token
        ];
    }
}
