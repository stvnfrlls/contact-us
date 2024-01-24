<?php

use App\Http\Controllers\ConcernController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('contact', function () {
    return view('form');
})->name('form');

Route::prefix('concerns')->group(function () {
    Route::get('/', [ConcernController::class, 'index'])->name('concerns.index');
    Route::post('store', [ConcernController::class, 'store'])->name('concerns.store');
    Route::get('view/{concern}', [ConcernController::class, 'show'])->name('concerns.show');
    Route::delete('destroy/{concern}', [ConcernController::class, 'destroy'])->name('concerns.destroy');
});

