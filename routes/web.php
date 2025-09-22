<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolInfoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin.dashboard');
});
Route::get('/admin/school-details',[SchoolInfoController::class , 'index'])->name('school-details');
