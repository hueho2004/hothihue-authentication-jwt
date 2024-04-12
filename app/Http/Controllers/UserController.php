<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function login(Request $request) {
        $response = Http::post('http://127.0.0.1:8000/api/auth/login', $request->all());
        if ($response->successful()) {
            $responseData = $response->json();
            return $responseData;
        } else {
            $errorCode = $response->status();
            $errorMessage = $response->body();
            return response()->json(['error' => $errorMessage], $errorCode);
        }
    }
}