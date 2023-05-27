<?php

use App\Http\Controllers\categorieController;
use App\Http\Controllers\colorController;
use App\Http\Controllers\sizeController;
use App\Http\Controllers\typeController;
use App\Http\Controllers\userController;
use App\Http\Controllers\countrieController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\brandController;
use App\Http\Controllers\productController;


Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/add_to_wishlist', function () {
    return view('frontend.add_to_wishlist');
});
Route::get('/cart', function () {
    return view('frontend.cart');
});
Route::get('/checkout', function () {
    return view('frontend.checkout');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});
Route::get('/index', function () {
    return view('frontend.index');
});

Route::get('/order_complete', function () {
    return view('frontend.order_complete');
});
Route::get('/product_detail', function () {
    return view('frontend.product_detail');
});


Route::get('/signup_user',[userController::class,'fetch_cid']);
Route::post('/signup_user',[userController::class,'register']);

Route::get('/user_profile',[userController::class,'user_profile']);
Route::get('/edit_profile/{id}',[userController::class,'edit']);
Route::post('/update_userprofile/{id}',[userController::class,'update_userprofile']);

Route::get('/user_login',[userController::class,'user_login']);
Route::post('/user_login',[userController::class,'chk_user']);

Route::get('/user_logout',[userController::class,'user_logout']);


Route::get('/men', [typeController::class,'men']);
Route::get('/view_type_wise_men/{id}', [typeController::class,'view_type_wise_men']);

Route::get('/women', [typeController::class,'women']);
Route::get('/view_type_wise_women/{id}', [typeController::class,'view_type_wise_women']);

Route::get('/product_detail/{id}', [productController::class,'product_detail']);



//-------------------------------------------------------Admin Routes--------------------------------------------------------------------------------


Route::get('/404_error', function () {
    return view('backend.404_error');
});

Route::get('/dashboard', function () {
    return view('backend.dashboard');
});

//------------------------------------Register Login and Logout Routes--------------------------
Route::get('/register_admin', [adminController::class,'register_admin']);
Route::post('/register_admin', [adminController::class,'register']);

Route::get('/admin_index', [adminController::class,'admin_index']);
Route::post('/admin_index', [adminController::class,'chk_login']);

Route::get('/logout', [adminController::class,'logout']);
//-----------------------------------------Manage Add Update Delete Brands------------------------------------------
Route::get('/add_brands', [brandController::class,'add_brands']);
Route::post('/add_brands', [brandController::class,'store']);

Route::get('/manage_brands', [brandController::class,'manage_brands']);
Route::get('/edit_brand/{id}', [brandController::class,'edit_brand']);

Route::post('/update_brand/{id}', [brandController::class,'update_brand']);

Route::get('/delete_brand/{id}', [brandController::class,'delete_brand']);
//-----------------------------------------Manage Add Update Delete Colors------------------------------------------
Route::get('/add_colors', [colorController::class,'add_colors']);
Route::post('/add_colors', [colorController::class,'store']);


Route::get('/manage_colors', [colorController::class,'manage_colors']);
Route::get('/edit_color/{id}', [colorController::class,'edit_color']);

Route::post('/update_color/{id}', [colorController::class,'update_color']);

Route::get('/delete_color/{id}', [colorController::class,'delete_color']);
//-----------------------------------------Manage Add Update Delete Sizes------------------------------------------
Route::get('/add_sizes', [sizeController::class,'add_sizes']);
Route::post('/add_sizes', [sizeController::class,'store']);


Route::get('/manage_sizes', [sizeController::class,'manage_sizes']);
Route::get('/edit_size/{id}', [sizeController::class,'edit_size']);

Route::post('/update_size/{id}', [sizeController::class,'update_size']);

Route::get('/delete_size/{id}', [sizeController::class,'delete_size']);

//-----------------------------------------Manage Add Update Delete Types------------------------------------------
Route::get('/add_types', [typeController::class,'add_types']);
Route::post('/add_types', [typeController::class,'store']);

Route::get('/manage_types', [typeController::class,'manage_types']);

Route::get('/edit_type/{id}', [typeController::class,'edit_type']);
Route::post('/update_type/{id}', [typeController::class,'update_type']);

Route::get('/delete_type/{id}', [typeController::class,'delete_type']);

//-----------------------------------------Manage Add Update Delete Products------------------------------------------

Route::get('/add_products', [productController::class,'add_products']);
Route::post('/add_products', [productController::class,'store']);

Route::get('/manage_products', [productController::class,'manage_products']);
Route::get('/edit_product/{id}', [productController::class,'edit_product']);
Route::post('/update_product/{id}', [productController::class,'update_product']);

//-----------------------------------------Manage Users------------------------------------------

Route::get('/manage_users', [userController::class,'manage_users']);
Route::get('/status/{id}', [userController::class,'status']);


Route::get('/table', function () {
    return view('backend.table');
});
Route::get('/profile', function () {
    return view('backend.profile');
});
