<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front;
use App\Http\Controllers\Admin;

Auth::routes();

Route::get('/', function (){
    return view("welcome");
});

Route::get('/user-home', [Front\Home::class, 'user_home'])->name("user.home");
