<?php
use App\Exceptions\Handler;
use GuzzleHttp\Middleware;


Route::get('/admin/', function () {
    return view('admin.dashboard.index');
})->name('admin.dashboard');

Route::get('/admin/UserProfile', function () {
    return view('admin.userprofile.index');
})->name('admin.userprofile');