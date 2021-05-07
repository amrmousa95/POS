<?php
use App\Http\Controllers\Dashboard;
Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){

    Route::prefix('dashboard')->name('dashboard.')->group(function(){

        Route::get('/index','Dashboard\DashboardController@index')->name('dashboard.index');

    });
});

