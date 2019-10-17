<?php


Route::get('/', 'HomeController@index')->name('home');
Route::get('/cabinet', 'Cabinet\HomeController@index')->name('cabinet');
Auth::routes();

// Vue examples

Route::get('/main', function () {
    return view('/main');
});
