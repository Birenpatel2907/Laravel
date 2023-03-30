<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactController;
use App\Http\Controllers\customerController;
use App\Http\Controllers\adminController;
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
    return view('frontend.index');
});	
Route::get('/header', function () {
    return view('frontend.layout.header');
});
	
Route::get('/index', function () {
    return view('frontend.index');
});

Route::get('/shop', function () {
    return view('frontend.shop');
});

Route::get('/detail', function () {
    return view('frontend.detail');
});

Route::get('/cart', function () {
    return view('frontend.cart');
});

Route::get('/checkout', function () {
    return view('frontend.checkout');
});

Route::get('/contact',[contactController::class,'index']);
Route::post('/contact',[contactController::class,'store']);

Route::get('/signup',[customerController::class,'index']);
Route::post('/signup',[customerController::class,'store']);

Route::get('/login',[customerController::class,'login']); 
Route::post('/logincheck',[customerController::class,'logincheck']); 
Route::get('/logout',[customerController::class,'logout']); 

//Route::get('/contact',contact1Controller::class); // auto call __invokable function
//Route::get('/contact',[contact2Controller::class,'index']);  call simple controller
//Route::get('/contact',[contactController::class,'index']); // call --resource controller


//=================================================//
// admin panel Routes

Route::get('/admin',[adminController::class,'admin']); 
Route::post('/adminlogincheck',[adminController::class,'adminlogincheck']);  

Route::get('/adminlogout',[adminController::class,'adminlogout']);

Route::get('/dashboard', function () {
    return view('backend.dashboard');
});
Route::get('/add_emp', function () {
    return view('backend.add_emp');
});
Route::get('/manage_emp', function () {
    return view('backend.manage_emp');
});
Route::get('/add_cat', function () {
    return view('backend.add_cat');
});
Route::get('/manage_cat', function () {
    return view('backend.manage_cat');
});
Route::get('/add_loc', function () {
    return view('backend.add_loc');
});
Route::get('/manage_loc', function () {
    return view('backend.manage_loc');
});

Route::get('/manage_user',[customerController::class,'alldata']);
Route::get('/manage_user/{id}',[customerController::class,'destroy']);

Route::get('/manage_contact',[contactController::class,'alldata']);
Route::get('/manage_contact/{id}',[contactController::class,'destroy']);