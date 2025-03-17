<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route:: get('/AranteIradJoseph', 'App\Http\Controllers\FeatureController@index');