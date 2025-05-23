<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[JobController::class,'index']);

Route::middleware('guest')->group(function(){
    Route::get('/register',[RegisterController::class,'create']);
    Route::post('/register',[RegisterController::class,'store']);
    
    Route::get('/login',[SessionController::class,'create']);
    Route::post('/login',[SessionController::class,'store']);
});

Route::delete('/logout',[SessionController::class,'desroy'])->middleware('auth'); 