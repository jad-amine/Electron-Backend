<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\UserController;


Route::group(['prefix' => 'v1'], function(){
  //open API
  Route::get('/', [HomepageController::class, 'getSomeItems']);
  
    // Users Routes
  Route::group(['prefix' => 'user'], function(){
      //open API
      Route::get('/login', [UserController::class, 'login']);  
      Route::post('/signUp', [UserController::class, 'signUp']);

      //should be only accessible by the admin (need authorization)
      Route::get('/{id?}', [UserController::class, 'getAllUsers']);
    });


});


