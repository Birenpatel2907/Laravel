<?php

use Illuminate\Support\Facades\Route;

//-----controller path load------------//
use App\Http\Controllers\adminController;    
use App\Http\Controllers\userController; 


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//-------------------------------------------------------Admin Routes--------------------------------------------------------------------------------//

Route::get('/', function () {
    return view('welcome');
});

     //===login & logout===//
Route::get('/admin',[adminController::class,'admin']); //login
Route::post('/adminlogincheck',[adminController::class,'adminlogincheck']);  
Route::get('/adminlogout',[adminController::class,'adminlogout']);//logout


//======ADD USER & ManageUser=====//
Route::get('/adduser',[userController::class,'index']); //add user
Route::post('/addusercheck',[userController::class,'store']);  
Route::get('/manageuser',[userController::class,'manageuser']); //view user
Route::get('/manageuser/{id}',[userController::class,'destroy']);
Route::get('/edituser/{id}',[userController::class,'edit']);  //Edit user
Route::post('/update/{id}',[userController::class,'update']);   //Update user


Route::get('/dashboard', function () {
    return view('backend.dashboard');
});

?>

