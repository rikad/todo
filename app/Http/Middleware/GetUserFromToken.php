<?php

/*
 * This file is part of jwt-auth.
 *
 * (c) Sean Tymon <tymon148@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Http\Middleware;

use \Tymon\JWTAuth\Exceptions\JWTException;
use \Tymon\JWTAuth\Exceptions\TokenExpiredException;

class GetUserFromToken extends \Tymon\JWTAuth\Middleware\BaseMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, \Closure $next)
    {
        $data =[
            'status' => false,
            'data' => null,
            'message' => '',
        ];

        if (! $token = $this->auth->setRequest($request)->getToken()) {
            $data['message'] = 'token_not_provided';
            return response()->json($data);
        }

        try {
            $user = $this->auth->authenticate($token);
        } catch (TokenExpiredException $e) {
            $data['message'] = 'token_expired';
            return response()->json($data);
        } catch (JWTException $e) {
            $data['message'] = 'token_invalid';
            return response()->json($data);
        }

        if (! $user) {
            $data['message'] = 'user_not_found';
            return response()->json($data);
        }

        $this->events->fire('tymon.jwt.valid', $user);

        return $next($request);
    }
}
