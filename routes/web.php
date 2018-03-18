<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'AsanaController@index')->name('home');

Route::get('/asana/{id}', 'AsanaController@show')->name('asana');

Route::get('buscar', 'AsanaController@list')->name('search');