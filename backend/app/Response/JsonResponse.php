<?php

namespace App\Response;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse as HttpJsonResponse;

class JsonResponse extends Controller
{
    public static function success(string $message, array|object $data): HttpJsonResponse
    {
        return response()->json(
            data: [
                "message"   =>  $message,
                "data"      =>  $data
            ],
            status: 200
        );
    }

    public static function error(string $message): HttpJsonResponse
    {
        return response()->json(
            data: [
                "message"   =>  $message
            ],
            status: 400
        );
    }
}