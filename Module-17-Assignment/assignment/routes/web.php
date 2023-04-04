<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customerController;

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
    return view('frontend.home');
});

Route::get('/home', function () {
    return view('frontend.home');
});

Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/gallery', function () {
    return view('frontend.gallery');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});


Route::get('/signup',[customerController::class,'index']);
Route::post('/signup',[customerController::class,'store']);

Route::get('/login',[customerController::class,'login']); 
Route::post('/login',[customerController::class,'logincheck']); 
Route::get('/logout',[customerController::class,'logout']);

?>