<?php

use App\Http\Controllers\PhoneController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PhoneController::class, "index"])->name("home");
Route::get('/phones/{id}', [PhoneController::class, "show"])->name("phones.show");


