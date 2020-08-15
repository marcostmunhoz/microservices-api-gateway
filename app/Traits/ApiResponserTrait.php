<?php

namespace App\Traits;

use Illuminate\Http\Response;

/**
 * ApiResponserTrait Trait.
 */
trait ApiResponserTrait
{
    /**
     * Returns a successful response.
     *
     * @param string $data   the data thats going to be sent
     * @param int    $status the response status code
     *
     * @return \Illuminate\Http\Response
     */
    public function successResponse($data = null, int $status = Response::HTTP_OK)
    {
        return response($data, $status)
            ->header('Content-Type', 'application/json');
    }

    /**
     * Returns a error response.
     *
     * @param string|array $error  the error returned by the application
     * @param int          $status the response status code
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function errorResponse($error, int $status)
    {
        return response()->json(
            compact('status', 'error'),
            $status
        );
    }

    /**
     * Returns a error message.
     *
     * @param string $message the error returned by the application
     * @param int    $status  the response status code
     *
     * @return \Illuminate\Http\Response
     */
    public function errorMessage($message, int $status)
    {
        return response($message, $status)
            ->header('Content-Type', 'application/json');
    }
}
