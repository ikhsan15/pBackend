<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

# first u have to import the controller class
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\StudentController;


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

// ANIMALS API
// create route GET for returning a data animals
Route::get('/animals', [AnimalController::class, 'index']);
// create route POST for storing the data animals
Route::post('/animals', [AnimalController::class, 'create']);
// create route PUT for updateing the data animals
Route::put('/animals/{id}', [AnimalController::class, 'update']);
// create route DELETE for remove the data animals
Route::delete('/animals/{id}', [AnimalController::class, 'delete']);

// STUDENT API
Route::get('/students', [StudentController::class, 'index']);
