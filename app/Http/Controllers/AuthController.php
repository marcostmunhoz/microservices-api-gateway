<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponserTrait;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Tymon\JWTAuth\Facades\JWTAuth;

/**
 * Auth Controller.
 */
class AuthController extends Controller
{
    use ApiResponserTrait;

    /**
     * Login.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);

        if ($token = JWTAuth::attempt($credentials)) {
            $user = auth()->user();

            return $this->successResponse([
                'status' => Response::HTTP_OK,
                'data' => compact('token', 'user'),
            ]);
        }

        return $this->errorResponse('Wrong user credentials.', Response::HTTP_UNAUTHORIZED);
    }
}
