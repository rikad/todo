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

class RefreshToken extends \Tymon\JWTAuth\Middleware\BaseMiddleware
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
        $response = $next($request);

        $data =[
            'status' => false,
            'data' => null,
            'message' => '',
        ];

        try {
            $newToken = $this->auth->setRequest($request)->parseToken()->refresh();
        } catch (TokenExpiredException $e) {
            $data['message'] = 'token_expired';
            return response()->json($data);
        } catch (JWTException $e) {
            $data['message'] = 'token_invalid';
            return response()->json($data);
        }

        // send the refreshed token back to the client
        $response->headers->set('Authorization', 'Bearer '.$newToken);

        return $response;
    }
}
