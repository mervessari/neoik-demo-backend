<?php

namespace App\Helpers;

use Illuminate\Http\JsonResponse;

class ApiResponse
{
    private static function send(bool $success, int $status, $data = null, $message = null, $errors = null, $meta = null): JsonResponse
    {
        $payload = [
            'success' => $success,
        ];

        if ($message !== null) {
            $payload['message'] = $message;
        }

        if ($data !== null) {
            $payload['data'] = $data;
        }

        if ($errors !== null) {
            $payload['errors'] = $errors;
        }

        if ($meta !== null) {
            $payload['meta'] = $meta;
        }

        return response()->json($payload, $status);
    }

    public static function success($data = null, ?string $message = null, int $status = 200, $meta = null): JsonResponse
    {
        return self::send(true, $status, $data, $message, null, $meta);
    }

    public static function error(?string $message, int $status = 400, $errors = null, $meta = null): JsonResponse
    {
        return self::send(false, $status, null, $message, $errors, $meta);
    }

    public static function validation($errors, ?string $message = 'Error Validation', int $status = 422, $meta = null): JsonResponse
    {
        return self::send(false, $status, null, $message, $errors, $meta);
    }
}
