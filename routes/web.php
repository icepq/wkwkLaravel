<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\BigTourSummarizeController;
use Illuminate\Http\Request;

Route::get('/test', function () {
    return view('test');
});


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



// thanks & password page
Route::get('/thanks', function () {
    return view('thanks');
});
Route::get('/manageFile/pass', function () {
    return view('manageFile/pass');
});
Route::get('/manageFile/pass', function () {
    return view('wkserver/public/manageFile/pass');
});

// bigTourを登録＆非表示にするForm
Route::post('/big-tour', [BigTourSummarizeController::class, 'store'])->name('big_tour.store');
Route::post('/big-tour/hide', [BigTourSummarizeController::class, 'hide'])->name('big_tour.hide');
Route::get('/save', [BigTourSummarizeController::class, 'showAll'])->name('save');
Route::get('/index', [BigTourSummarizeController::class, 'index']);
Route::get('/', [BigTourSummarizeController::class, 'index']);


// Route::get('/manageFile/pass', [BigTourSummarizeController::class, 'manage'])->name('big_tour.manage');
// Route::post('/manageFile/pass/hide', [BigTourSummarizeController::class, 'hide'])->name('big_tour.hide');
Route::get('/manageFile/pass', [BigTourSummarizeController::class, 'create'])->name('big_tour.create');
Route::post('/manageFile/pass', [BigTourSummarizeController::class, 'store'])->name('big_tour.store');

Route::post('/manageFile/pass', [BigTourSummarizeController::class, 'hide'])->name('big_tour.hide');


// Route::get('/big_tour/#id#', function () {
//     return view('big_tour.#id#');
// });
Route::get('/big_tour/2', function () {
    return view('big_tour.2');
});