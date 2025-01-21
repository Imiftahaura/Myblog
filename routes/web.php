<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('/posts', \App\Http\Controllers\PostController::class);

route::get('index', function(){
    return view('index'). view('content') ;
});
