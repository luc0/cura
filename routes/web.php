<?php

use App\Asana;
use Illuminate\Support\Facades\Route;

Route::get('/', 'AsanaController@show');

Route::get('buscar/{item}', 'AsanaController@list');