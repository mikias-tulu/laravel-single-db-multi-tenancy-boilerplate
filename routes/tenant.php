<?php

Route::get('/{company}', 'DashboardController@index')->name('store');

Route::group(['prefix' => 'projects', 'as' => 'projects.'], function () {
    Route::post('/', 'ProjectController@store')->name('store');
    Route::get('/{project}', 'ProjectController@show')->name('show');
    Route::patch('/{project}', 'ProjectController@update')->name('update');
});
