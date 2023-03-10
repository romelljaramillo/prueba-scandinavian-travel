<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TranslationsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(TranslationsController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/show/{full_key}', 'show');
});
