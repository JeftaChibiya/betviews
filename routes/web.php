<?php

Auth::routes();

//  Public
Route::get('/', 'MainController@index')->name('home');


// Admin
Route::get('admin.index', 'AdminController@index')->name('admin.index');
Route::get('tip.index', 'TipsController@index')->name('tip.index');
Route::get('tip.create', 'TipsController@create')->name('tip.create');
Route::post('tip.store', 'TipsController@store')->name('tip.store');
Route::get('user.profile', 'AccountsController@profile')->name('user.profile');
Route::get('/register/confirm', 'Auth\RegisterConfirmationController@index');

Route::post('stripe/webhook','\Laravel\Cashier\Http\Controllers\WebhookController@handleWebhook');


Route::get('test-odds-api', 'MainController@test')->name('test-odds-api');