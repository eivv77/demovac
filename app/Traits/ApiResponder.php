<?php


namespace App\Traits;


use Illuminate\Http\JsonResponse;

trait ApiResponder
{
    public function success($message, $data = [], $status = 200): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $data,
            'message' => $message,
        ], $status);
    }

    public function error($message, $status = 400): JsonResponse
    {
        return response()->json([
            'success' => false,
            'message' => $message,
        ], $status);
    }

}
