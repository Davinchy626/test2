<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/first-page','FirstController@Page');

Route::get('/hello', function(){

    echo "great";
});
