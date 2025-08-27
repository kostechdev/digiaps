<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendudukExportController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/exports/penduduks', PendudukExportController::class)->name('penduduks.export');
