<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoteController;

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

Route::post('/news/add', [NewsController::class, 'add']);

Route::get('/news/all', [NewsController::class, 'all']);

Route::post('/news/delete/{id}', [NewsController::class, 'delete']);

Route::put('/news/change_title/{id}/{title}',[NewsController::class, 'changeTitle']);