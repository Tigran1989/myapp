<?php

use Illuminate\Support\Facades\Route;
//dd('test');
Route::get('/', function () {
    return view('pages.home');
});