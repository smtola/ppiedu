<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LapController;
use App\Http\Controllers\TrainController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;



Route::get('/', [\App\Http\Controllers\HomeController::class,'index'])->name('home');

Route::get('/faculty/{slug}', [\App\Http\Controllers\HomeController::class,'show'])->name('faculty.show');

Route::controller(AboutUsController::class)->group(function () {
    Route::get('/aboutus',  'index')->name('aboutus');
});

Route::controller(TrainController::class)->group(function () {
    Route::get('/training',  'index')->name('training');
});

Route::controller(NewsController::class)->group(function () {
    Route::get('/news',  'index')->name('news');
    Route::get('/news/{id}',  'show')->name('news.show');
});

Route::controller(ContactController::class)->group(function () {
    Route::get('/contact',  'index')->name('contact');
});

Route::controller(LapController::class)->group(function () {
    Route::get('/lap',  'index')->name('lap');
});

Route::controller( CareerController::class)->group(function () {
    Route::get('/career',  'index')->name('career');
    Route::post('/career/apply', [CareerController::class, 'apply'])->name('career.apply');
});

Route::get('/library', function () {
    return Inertia::render('Library/Browser');
})->name('library.browser');

Route::get('/registration', [RegistrationController::class, 'create'])->name('registration.create');
Route::post('/registration', [RegistrationController::class, 'store'])->name('registration.store');
Route::get('/registration/success', [RegistrationController::class, 'success'])->name('registration.success');

Route::get('/storage-link', function () {
    try {
        Artisan::call('storage:link');
        return response()->json([
            'success' => true,
            'message' => 'Storage link created successfully.'
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => 'Failed to create storage link.',
            'error' => $e->getMessage()
        ], 500);
    }
});
