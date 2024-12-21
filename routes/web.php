<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BirthDetailController;

//Route::get('/', function () {
//    return view('welcome');
//});



Route::get('/', [BirthDetailController::class, 'showForm'])->name('form');
Route::post('/generate', [BirthDetailController::class, 'generateMap'])->name('generateMap');
