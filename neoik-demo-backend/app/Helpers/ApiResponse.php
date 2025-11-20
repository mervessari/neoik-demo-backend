<?php

namespace App\Helpers;

use Illuminate\Http\JsonResponse;


class ApiResponse
{
    private static function build(bool $success, $message, $code, $data = null, $errors = null, $meta = null): JsonResponse
    {
        $response = [
            'success' => $success,
            'code' => $code,
            'message' => $message,
        ];
        if (!is_null($data)) {
            $response['data'] = $data;
        }
        if (!is_null($errors)) {
            $response['errors'] = $errors;
        }
        if (!is_null($meta)) {
            $response['meta'] = $meta;
        }
        return response()->json($response, $code);
    }

    public static function success($data = null, $message = 'Success', $code = 200, $meta = null): JsonResponse
    {
        return self::build(true, $message, $code, $data, null, $meta);
    }

    public static function error($message = 'Error', $code = 400, $errors = null, $meta = null): JsonResponse
    {
        return self::build(false, $message, $code, null, $errors, $meta);
    }

    public static function validation($errors, $message = 'Validation Error', $code = 422, $meta = null): JsonResponse
    {
        return self::build(false, $message, $code, null, $errors, $meta);
    }
}
