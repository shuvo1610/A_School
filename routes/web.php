<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;

//---------Authentication--------//

Route::get('user-registration',[AuthController::class,'user_registration'])->name('auth.registration');
Route::post('user-create',[AuthController::class,'user_store'])->name('user.create');
Route::get('/',[AuthController::class,'user_login'])->name('auth.login');
Route::post('user-login',[AuthController::class,'post_login'])->name('user.login');
Route::get('auth-dashboard',[AuthController::class,'dashboard'])->name('auth.dashboard');
Route::get('user-logout',[AuthController::class,'logout'])->name('user.logout');

Route::get('user-Verified/{id}',[AuthController::class,'Verified'])->name('user.Verified');


//------------Students----------//

Route::get('dashboard',[StudentController::class,'dashboard'])->name('dashboard');
Route::get('student-create',[StudentController::class,'create'])->name('student.create');



//-----------Users-----------//

Route::get('user-index',[UserController::class,'index'])->name('user.index');
Route::get('user-edit/{id}',[UserController::class,'edit'])->name('user.edit');
Route::post('user-update/{id}',[UserController::class,'update'])->name('user.update');
Route::get('user-delete/{id}',[UserController::class,'destroy'])->name('user.delete');
Route::get('user-profile/{id}',[UserController::class,'profile'])->name('user.profile');
Route::get('auth-profile',[UserController::class,'authProfile'])->name('user.authprofile');
Route::post('update-profile',[UserController::class,'updateProfile'])->name('user.updateprofile');
Route::get('user-resetPassword',[UserController::class,'resetPassword'])->name('user.resetpassword');
Route::post('change-password',[UserController::class,'updatePassword'])->name('update.password');
Route::get('forgot-password',[UserController::class,'findUser'])->name('user.forgotpass');
Route::post('find-user',[UserController::class,'getUser'])->name('get.user');
Route::get('set-pass/{id}',[UserController::class,'setPass'])->name('user.setPass');
Route::post('store-pass/{id}',[UserController::class,'store'])->name('pass.store');
