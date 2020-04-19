<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::resource('/todo', 'TodosController');
Route::get('/todo/{id}/completed','TodosController@completed');
