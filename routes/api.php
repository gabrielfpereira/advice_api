<?php

use App\Http\Controllers\Api\SlipController;
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

Route::middleware('auth:sanctum')->post('/slip', [SlipController::class, 'store'])->name('api.store');
Route::middleware('auth:sanctum')->get('/slip/show', [SlipController::class, 'show']);
Route::middleware('auth:sanctum')->get('/slip/list', [SlipController::class, 'getList']);
Route::middleware('auth:sanctum')->post('/slip/update', [SlipController::class, 'update']);
Route::middleware('auth:sanctum')->delete('/slip', [SlipController::class, 'destroy']);

Route::get('/random', [SlipController::class, 'random']);
Route::get('/count', [SlipController::class, 'countSlip']);


// {"token":"1|ZDZyu53m8TIRAc8nJTYuP7u49rbkE0GrqLrWm9Ui"}
