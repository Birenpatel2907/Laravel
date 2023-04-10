<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;    
use App\Http\Controllers\userController; 

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

Route::post('/insert',[userController::class,'store']); //insert data
Route::get('/view',[userController::class,'manageuser']); //all data view
Route::get('/view/{id}',[userController::class,'singleuser']); // single data view
Route::put('/update/{id}',[userController::class,'update']); // update
Route::delete('/user/{id}',[userController::class,'destroy']); // delete
Route::post('/login',[userController::class,'login']); 