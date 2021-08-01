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

        Route::get('/', 'Admin\SettingController@showDashboard')->name('admin.dashboard');
    
        Route::get('/UserProfile', 'Admin\SettingController@showUserProfile')->name('admin.userprofile');

        Route::get('/settings', 'Admin\SettingController@index')->name('admin.settings');
        Route::post('/settings', 'Admin\SettingController@update')->name('admin.settings.update');

        // route categories
        Route::group(['prefix'  =>   'categories'], function() {

            Route::get('/', 'Admin\CategoryController@index')->name('admin.categories.index');
            Route::get('/create', 'Admin\CategoryController@create')->name('admin.categories.create');
            Route::post('/store', 'Admin\CategoryController@store')->name('admin.categories.store');
            Route::get('/{id}/edit', 'Admin\CategoryController@edit')->name('admin.categories.edit');
            Route::post('/update', 'Admin\CategoryController@update')->name('admin.categories.update');
            Route::get('/{id}/delete', 'Admin\CategoryController@delete')->name('admin.categories.delete');
        
        });




        
    });

});

