<?php

use App\Models\Day;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/test/{id}', function($id){
    return response()->json([
        'data' => $id
    ]);
});

Route::post('/fetch-sub-day', function(Request $request){
    $data = Day::where('day', $request->input('day_id'))->get();
    return response()->json([
        'data' => $data
    ]);
});