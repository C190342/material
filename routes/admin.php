<?php
use App\Exceptions\Handler;
use GuzzleHttp\Middleware;

Route::group(['prefix'  =>  'admin'], function () {

    // login route
    Route::get('login', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Admin\LoginController@login')->name('admin.login.post');
    Route::get('logout', 'Admin\LoginController@logout')->name('admin.logout');

    // chec Auth
    Route::group(['middleware' => ['auth:admin']], function () {

        Route::get('/', function () {
            return view('admin.dashboard.index');
        })->name('admin.dashboard');
    
        Route::get('/UserProfile', function () {
            return view('admin.userprofile.index');
        })->name('admin.userprofile');

        Route::get('/settings', 'Admin\SettingController@index')->name('admin.settings');
        Route::post('/settings', 'Admin\SettingController@update')->name('admin.settings.update');


    });

});

