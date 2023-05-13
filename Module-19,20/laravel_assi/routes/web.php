<?php

use Illuminate\Support\Facades\Route;
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


     //===login & logout===//
Route::get('/admin',[adminController::class,'login']); //login
Route::post('/adminlogincheck',[adminController::class,'adminlogincheck']);  
Route::get('/adminlogout',[adminController::class,'adminlogout']);//logout


Route::get('/dashboard', function () {
    return view('backend.dashboard');
});


Route::get('/manageuser',[userController::class,'alldata']);
Route::get('/manageuser/{id}',[userController::class,'destroy']);

//-------------------------------------------------------User Routes--------------------------------------------------------------------------------//


     //===login & logout===//
Route::get('/user',[userController::class,'userlogin']); //login
Route::post('/logincheck',[userController::class,'logincheck']);  
Route::get('/logout',[userController::class,'logout']);//logout

Route::post('/signup1',[userController::class,'store']); 

Route::get('/signup', function () {
    return view('frontend.registration');
});

Route::get('/index', function () {
    return view('frontend.index');
});

Route::get('/videos', function () {
    return view('frontend.videos');
});

Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});


















//===========================admin Panel=============================================//
Route::get('/header', function () {
    return view('backend.layout.header');
});
Route::get('/adminlogin',[adminController::class,'login']);



Route::get('/add_image', function () {
    return view('backend.add_image');
});
Route::get('/adminindex', function () {
    return view('backend.index');
});
Route::get('/login', function () {
    return view('backend.login');
});
Route::get('/images', function () {
    return view('backend.images');
});



///==================================frontend =============================================///

Route::get('/index', function () {
    return view('frontend.index');
});
Route::get('/userlogin', function () {
    return view('frontend.userlogin');
});

Route::get('/registration',[userController::class,'index']);

Route::post('/registration',[userController::class,'store']); 

Route::post('/userlogin',[userController::class,'logincheck']);
















Route::get('/registration', function () {
    return view('frontend.registration');
});

Route::get('/userheader', function () {
    return view('frontend.layout.header');
});
Route::get('/userfooter', function () {
    return view('frontend.layout.footer');
});
Route::get('/index', function () {
    return view('frontend.index');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});
Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/gallery', function () {
    return view('frontend.gallery');
});

Route::get('/photo-detail', function () {
    return view('frontend.photo-detail');
});

