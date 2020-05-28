<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::patch('/', function () {
    return response()->json([
        'status'  => 'error',
        'code'    => 404,
        'message' => 'url not found',
        'data'    => null
    ]);
});
Route::post('/', function () {
    return response()->json([
        'status'  => 'error',
        'code'    => 404,
        'message' => 'url not found',
        'data'    => null
    ]);
});
Route::put('/', function () {
    return response()->json([
        'status'  => 'error',
        'code'    => 404,
        'message' => 'url not found',
        'data'    => null
    ]);
});
Route::delete('/', function () {
    return response()->json([
        'status'  => 'error',
        'code'    => 404,
        'message' => 'url not found',
        'data'    => null
    ]);
});
$router->get('/', function () {
    return response()->json([
        'status'  => 'error',
        'code'    => 404,
        'message' => 'url not found',
        'data'    => null
    ]);
});
