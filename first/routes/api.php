<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/data', function () {
    return response()->json([        'message' => 'Hello, world!'    ]);
});

Route::get('/get-json', function () {
    $url = 'https://api.chucknorris.io/jokes/random'; // Change the URL to the actual URL that returns the JSON data
    $response = file_get_contents($url);
    $data = json_decode($response, true);

    return response()->json($data);
});
