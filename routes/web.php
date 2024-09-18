<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;


Route::get('/', function () {
    return view('index');
});

Route::resource('example',Dashboard::class);
