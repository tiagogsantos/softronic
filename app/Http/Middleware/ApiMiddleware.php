<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;

class ApiMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        try {
            if (!$request->hasHeader('Authorization')) {
                throw new \Exception('Header Authorization Not Found');
            }
            $authorizationHeader = $request->header('Authorization');
            $token = str_replace('Bearer ', '', $authorizationHeader);
            $dataAuth = JWT::decode($token, 'uma_chave_muito_secreta123', ['HS256']);
            $user = User::where('email', $dataAuth->email)->first();
            if (is_null($user)) {
                throw new \Exception('Usuário não autorizado');
            }
            return $next($request);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 401);
        }
    }
}
