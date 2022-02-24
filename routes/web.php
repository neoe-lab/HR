<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\YearController;
use App\Http\Controllers\QuestionController;


// ------------------------------ Authentication --------------------
Route::get('/',function(){

    return view('auth.login',['title'=>'login'])->name('login');
});

//------------------------------- Home page -------------------------------
Route::get('/home',[HomeController::class,'index'])->name('home');


// ------------------------------  user management -------------------------------
Route::get('/usermanagement',[UserController::class,'index'])->name('usermanagement');
Route::get('usermanagement/new-user',[UserController::class,'new_user'])->name('new-user');



// ----------------------------------- Department -----------------------------
Route::get('/department',[DepartmentController::class,'index'])->name('department');


//------------------------------------ view Profile ------------------------
Route::get('/profile',function(){
    return view('usermanagement.profile_user');
})->name('profile');

// ---------------------------------- Year/Time -------------------------------
Route::get('/times',[YearController::class,'index'])->name('view_times');

// --------------------------------- evaluation ------------------------------
Route::get('/performance',[QuestionController::class,'performance'])->name('performance');
