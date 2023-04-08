<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customerController;
use App\Http\Controllers\adminController; 
use App\Http\Controllers\photoController; 
use App\Http\Controllers\employeeController; 
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
//-------------------------------------------------------Employee Routes--------------------------------------------------------------------------------//



Route::group(['middleware'=>['empbeforelogin']],function()     //group middleware//
{
	 //===login & logout===//
Route::get('/employee',[employeeController::class,'index']); //login
Route::post('/employeelogincheck',[employeeController::class,'employeelogincheck']);  
});

 Route::group(['middleware'=>['empafterlogin']],function()
{     
	  
Route::get('/dashboards', function () {
    return view('employee.dashboard');
});	  
	  
Route::get('/employeelogout',[employeeController::class,'employeelogout']);//logout

//======Image Gallery=====//
Route::get('/addphotos',[employeeController::class,'addphoto']);
Route::post('/addphotos',[employeeController::class,'add']);
Route::get('/managephotos',[employeeController::class,'show']);


//======ManageUser=====//
  
Route::get('/manageusers',[employeeController::class,'manageuser']); //view user
Route::get('/manageusers/{id}',[employeeController::class,'destroy']);//delete user
Route::post('/manageusers',[employeeController::class,'manageuser']); //search User

});


//-----------------------------------------Coustomer Routes---------------------------------------------------------------------------//
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('frontend.home');
});

Route::get('/about', function () {
    return view('frontend.about');
});


Route::get('/imagegallery',[photoController::class,'alldata']);

Route::get('/contact', function () {
    return view('frontend.contact');
});


Route::get('/signup',[customerController::class,'index']);
Route::post('/signup',[customerController::class,'store']);

Route::get('/login',[customerController::class,'login']); 
Route::post('/login',[customerController::class,'logincheck']); 
Route::get('/logout',[customerController::class,'logout']);


//-------------------------------------------------------Admin Routes--------------------------------------------------------------------------------//



     //===login & logout===//
Route::get('/admin',[adminController::class,'index']); //login
Route::post('/adminlogincheck',[adminController::class,'adminlogincheck']);  
Route::get('/adminlogout',[adminController::class,'adminlogout']);//logout


//======ManageUser=====//
  
Route::get('/manageuser',[customerController::class,'manageuser']); //view user
Route::get('/manageuser/{id}',[customerController::class,'destroy']);//delete user
Route::post('/manageuser',[customerController::class,'manageuser']); //search User


//======Image Gallery=====//
Route::get('/addphoto',[photoController::class,'index']);
Route::post('/addphoto',[photoController::class,'store']);
Route::get('/managephoto',[photoController::class,'show']);


Route::get('/dashboard', function () {
    return view('backend.dashboard');
});


?>