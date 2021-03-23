<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['cliente'])->group(function () {

    Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('index');

});
