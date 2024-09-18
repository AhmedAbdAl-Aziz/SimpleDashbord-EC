<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;


Route::get('/', function () {
    return view('index');
});

Route::resource('dashboard',Dashboard::class);





// Route::prefix('dashboard')->group(function () {
//     Route::get('index',);

// });
