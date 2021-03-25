<?php

Route::post('/admin/login', 'AuthController@login')->name('admin.login');

Route::prefix('Admin')->group(function () {
    Route::get('/login', function () {
        return view('Admin.loginAdmin');
    });
    Route::group(['middleware' => 'roles', 'roles' => ['Admin']], function () {

        Route::get('/logout/logout', 'AuthController@logout')->name('user.logout');
        Route::get('/home', 'AuthController@index')->name('admin.dashboard');

        // Profile Route
        Route::prefix('profile')->group(function () {
            Route::get('/index', 'profileController@index')->name('profile.index');
            Route::post('/index', 'profileController@update')->name('profile.update');
        });

        // Admin Routes
        Route::prefix('Admin')->group(function () {
            Route::get('/index', 'AdminController@index')->name('Admin.index');
            Route::get('/allData', 'AdminController@allData')->name('Admin.allData');
            Route::post('/create', 'AdminController@create')->name('Admin.create');
            Route::get('/edit/{id}', 'AdminController@edit')->name('Admin.edit');
            Route::post('/update', 'AdminController@update')->name('Admin.update');
            Route::get('/destroy/{id}', 'AdminController@destroy')->name('Admin.destroy');
        });

        /** Compound */
        Route::prefix('Compound')->group(function () {
            Route::get('/index', 'CompoundController@index')->name('Compound.index');
            Route::get('/allData', 'CompoundController@allData')->name('Compound.allData');
            Route::post('/create', 'CompoundController@create')->name('Compound.create');
            Route::get('/edit/{id}', 'CompoundController@edit')->name('Compound.edit');
            Route::post('/update', 'CompoundController@update')->name('Compound.update');
            Route::get('/destroy/{id}', 'CompoundController@destroy')->name('Compound.destroy');
        });

        /** Villas */
        Route::prefix('Villas')->group(function () {
            Route::get('/index', 'VillasController@index')->name('Villas.index');
            Route::get('/allData', 'VillasController@allData')->name('Villas.allData');
            Route::post('/create', 'VillasController@create')->name('Villas.create');
            Route::get('/edit/{id}', 'VillasController@edit')->name('Villas.edit');
            Route::post('/update', 'VillasController@update')->name('Villas.update');
            Route::get('/destroy/{id}', 'VillasController@destroy')->name('Villas.destroy');
        });
    });
});

