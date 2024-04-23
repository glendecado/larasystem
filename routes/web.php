<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;




//main
Route::get('/', [PageController::class, 'main'])->name('main');


//guest
Route::get('/about', [PageController::class, 'guest'])->name('guest.about');
