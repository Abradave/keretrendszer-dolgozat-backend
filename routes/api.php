<?php

use App\Http\Controllers\API\TransportControl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource("/public_transports", TransportControl::class);
