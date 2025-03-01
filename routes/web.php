<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\BannersController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LapController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TrainController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/faculty/information-technology', function () {
    return view('faculty');
})->name('faculty.datail');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(AboutUsController::class)->group(function () {
    Route::get('/aboutus',  'index')->name('aboutus');
});

Route::controller(TrainController::class)->group(function () {
    Route::get('/training',  'index')->name('training');
});

Route::controller(ContactController::class)->group(function () {
    Route::get('/contact',  'index')->name('contact');
});

Route::controller(LapController::class)->group(function () {
    Route::get('/lap',  'index')->name('lap');
});

Route::controller( CareerController::class)->group(function () {
    Route::get('/career',  'index')->name('career');
});

Route::controller(\App\Http\Controllers\BannersController::class)->group(function () {
    Route::resource('banner', BannersController::class);
});

require __DIR__.'/auth.php';
