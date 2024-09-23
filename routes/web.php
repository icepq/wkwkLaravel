<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\BigTourSummarizeController;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/add', function () {
    return view('add');
});
Route::get('/calendar', function () {
    return view('calendar');
});
Route::get('/discription', function () {
    return view('discription');
});
Route::get('/save', function () {
    return view('save');
});
Route::get('/big-tour/form', function () {
    return view('big_tour_form');
})->name('big_tour.form');
Route::get('/thanks', function () {
    return view('thanks');
});


Route::get('/tours', [TourController::class, 'index'])->name('tours.index');
Route::post('/tours', [TourController::class, 'store'])->name('tours.store');

// 以下は大型企画関連
// Route::get('/big-tour', [BigTourSummarizeController::class, 'index'])->name('big_tour.index');
Route::post('/big-tour', [BigTourSummarizeController::class, 'store'])->name('big_tour.store');
Route::post('/big-tour/hide', [BigTourSummarizeController::class, 'hide'])->name('big_tour.hide');

// 以下は独学
Route::get('/save', [BigTourSummarizeController::class, 'save'])->name('save');