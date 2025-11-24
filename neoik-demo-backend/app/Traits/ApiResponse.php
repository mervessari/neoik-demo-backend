<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;

trait ApiResponse
{
    private function sendResponse(bool $success, int $status, $data = null, $message = null, $errors = null, $meta = null): JsonResponse
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

    public function success($data = null, ?string $message = null, int $status = 200, $meta = null): JsonResponse
    {
        return $this->sendResponse(true, $status, $data, $message, null, $meta);
    }

    public function error(?string $message, int $status = 400, $errors = null, $meta = null): JsonResponse
    {
        return $this->sendResponse(false, $status, null, $message, $errors, $meta);
    }

    public function validation($errors, ?string $message = 'Error Validation', int $status = 422, $meta = null): JsonResponse
    {
        return $this->sendResponse(false, $status, null, $message, $errors, $meta);
    }
}
