<?php

use App\Http\Controllers\PatiensController;
use App\Http\Controllers\AuthController;
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


// public routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/patiens', [PatiensController::class, 'index']);
Route::get('/patiens/{id}',[PatiensController::class,'show']);
Route::get('/patiens/search/{name}',[PatiensController::class,'search']);
Route::get('/patiens/searchstatus/{status}',[PatiensController::class,'searchstatus']);

// protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/patiens',[PatiensController::class,'store']);
    Route::put('/patiens/{id}',[PatiensController::class,'update']);
    Route::delete('/patiens/{id}',[PatiensController::class,'destroy']);
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
