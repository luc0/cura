<?php

use App\Asana;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $asanas = Asana::all();
    return view('home');
});
