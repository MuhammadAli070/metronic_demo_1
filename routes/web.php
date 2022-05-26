<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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


//  SignIn , SignUp Pages link
// Route::get('/',[HomeController::class,'signIn'])->name('signIn');
Route::get('/',[HomeController::class,'homePage'])->name('homePage');
Route::get('/signUp',[HomeController::class,'SignUp'])->name('signUp');


// Auth Middleware Routes
Route::group(['middleware'=>'auth:web'],function(){

    Route::get('/dashboard', [HomeController::class,'dashboard'])->name('dashboard');

    // New User Cruds
    
    Route::group(['prefix'=>'user'],function(){
        Route::get('register',[UserController::class,'create'])->name('new-user');
        Route::get('list',[UserController::class,'index'])->name('list');
        Route::post('store',[UserController::class,'store'])->name('store');
        Route::get('edit/{id}',[UserController::class,'edit'])->name('edit');
        Route::post('update/{id?}',[UserController::class,'update'])->name('update');
        Route::get('delete/{id}',[UserController::class,'destroy'])->name('delete');

        Route::get('form-signup',[UserController::class,'create'])->name('form-signup');


    });
});








require __DIR__.'/auth.php';
