<?php

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

// create route GET for returning a data animals
Route::get('/animals', function(){
  echo "ini adalah daftar animals";
});

// create route POST for storing the data animals
Route::post('/animals', function(){
  echo "add new daftar animals";
});

// create route PUT for updateing the data animals
Route::put('/animals/{id}', function($id){
  echo "update daftar animals dari id $id";
});

// create route DELETE for remove the data animals
Route::delete('/animals/{id}', function($id){
  echo "delete daftar animals dari id $id";
});