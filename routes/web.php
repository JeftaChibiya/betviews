<?php

Auth::routes();

//  Public
Route::get('/', 'MainController@index')->name('home');
Route::get('/site.support', 'MainController@support')->name('support');
Route::get('/site.tips', 'MainController@tips')->name('site.tips');

// Admin
Route::get('admin', 'AdminController@index')->name('admin.index');
Route::get('tip.index', 'TipsController@index')->name('tip.index');
Route::get('tip.show/{tip}', 'TipsController@show')->name('tip.show');
Route::get('tip.betting-tip', 'TipsController@bettingTip')->name('tip.betting-tip');
Route::get('tip.general-tip', 'TipsController@generalTip')->name('tip.general-tip');
Route::post('tip.store', 'TipsController@store')->name('tip.store');
Route::get('dummy', 'TipsController@dummy')->name('dummy');

Route::get('user.profile', 'AccountsController@profile')->name('user.profile');
Route::get('/register/confirm', 'Auth\RegisterConfirmationController@index');

Route::post('stripe/webhook','\Laravel\Cashier\Http\Controllers\WebhookController@handleWebhook');


Route::get('test-odds-api', 'MainController@test')->name('test-odds-api');