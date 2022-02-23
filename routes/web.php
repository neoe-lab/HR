<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\UserController;


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
Route::get('/',function(){

    return view('auth.login',['title'=>'login']);
});

// home page
Route::get('/home',[HomeController::class,'index'])->name('home');


// usermanagement
Route::get('/usermanagement',[UserController::class,'index'])->name('usermanagement');
Route::get('usermanagement/new-user',[UserController::class,'new_user'])->name('new-user');



// Department
Route::get('/department',[DepartmentController::class,'index'])->name('department');


// view Profile
Route::get('/profile',function(){
    return view('usermanagement.profile_user');
})->name('profile');
