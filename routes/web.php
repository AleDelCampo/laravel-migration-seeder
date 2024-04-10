<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainController;

Route::get('/', [TrainController::class, 'index']);

Route::get('/item', function () {
    return view('secondpage');
})->name('item');

