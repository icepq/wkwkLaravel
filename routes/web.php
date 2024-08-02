<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScheduleController;


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

Route::get('/thanks', function () {
    return view('thanks');
})->name('schedule.thanks');