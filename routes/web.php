<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\YearController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\FollowController;
use App\Models\Question;

// ------------------------------ Authentication --------------------
Route::get('/',function(){

    return view('auth.login');

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
// show person and self
Route::get('/performance/list-person-performance',[QuestionController::class,'listPersonPerformance'])->name('list-person-performance');
// show form evaluation performance
Route::get('/performance/form',[QuestionController::class,'performance'])->name('form-performance');
Route::post('/performance/answer',[QuestionController::class,'answerPerformance'])->name('answer');
// show person and self questions


//------------------------------ Follow ติดตามผลการประเมิน ---------------------------
// สมรรถนะ
Route::get('/follow-performance',[FollowController::class,'follow_performance'])->name('follow-performance');
// สัมพันธภาพ
Route::get('/follow-relationship',[FollowController::class,'follow_relationship'])->name('follow-relationship');

