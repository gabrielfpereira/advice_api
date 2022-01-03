<?php

use App\Http\Controllers\Api\AdviceController;
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

Route::middleware('auth:sanctum')->post('/advice', [AdviceController::class, 'store'])->name('api.store');
Route::middleware('auth:sanctum')->get('/advice', [AdviceController::class, 'show']);
Route::middleware('auth:sanctum')->get('/advice/list', [AdviceController::class, 'getList']);
Route::middleware('auth:sanctum')->put('/advice', [AdviceController::class, 'update']);
Route::middleware('auth:sanctum')->delete('/advice', [AdviceController::class, 'destroy']);

Route::get('/random', [AdviceController::class, 'random']);
Route::get('/count', [AdviceController::class, 'countAdvice']);
Route::post('/token/generator', [AdviceController::class, 'token']);