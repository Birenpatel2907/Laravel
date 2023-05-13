<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\blogController;;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//-----------------------------------------------------------------blogController Routes--------------------------------------------
Route::get('/add_blog', function () {
    return view('backend.add_blog');
});
Route::post('/add_blog',[blogController::class,'add_blog']);
Route::get('/edit_blog/{id}',[blogController::class,'edit_blog']);
Route::post('/update_blog/{id}',[blogController::class,'update_blog']);

Route::get('/delete_blog/{id}',[blogController::class,'delete_blog']);
Route::get('/manage_blog',[blogController::class,'manage_blog']);


//-----------------------------------------------------------------adminController Routes--------------------------------------------

Route::get('/form', function () {
    return view('backend.form');
});

Route::get('/admin_login', function () {
    return view('backend.admin_login');
});
Route::get('/admin_index',[adminController::class,'admin_index']);
Route::post('/admin_register',[adminController::class,'store']);



Route::get('/admin_login',[adminController::class,'admin_login']);
Route::post('/admin_login',[adminController::class,'logincheck']);
Route::get('/admin_logout',[adminController::class,'logout']);



//-------------------------------------------------------------User Side Routes------------------------------------



Route::get('/index',[blogController::class,'view_blog']);