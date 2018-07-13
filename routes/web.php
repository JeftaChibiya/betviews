<?php

// users
Auth::routes();
Route::get('user.profile', 'AccountsController@profile')->name('user.profile');
Route::get('/register/confirm', 'Auth\RegisterConfirmationController@index');

//  Public
Route::get('/', 'MainController@index')->name('home');
Route::get('/site.support', 'MainController@support')->name('support');
Route::get('/site.tips', 'MainController@tips')->name('site.tips');
Route::get('/site.insight', 'MainController@insight')->name('site.insight');
Route::get('/site.specials', 'MainController@specials')->name('site.specials');
Route::get('/tags.all', 'TagsController@all')->name('tags.all');

// Admin
Route::get('admin', 'AdminController@index')->name('admin.index');

// tips
Route::get('tip.index', 'TipsController@index')->name('tip.index');
Route::get('tip.show/{tip}', 'TipsController@show')->name('tip.show');
Route::get('tip.betting-tip', 'TipsController@bettingTip')->name('tip.betting-tip');
Route::get('tip.general-tip', 'TipsController@generalTip')->name('tip.general-tip');
Route::post('tip.store', 'TipsController@store')->name('tip.store');

// tags / topics 
Route::post('tag.store', 'TagsController@store')->name('tag.store');

// quizzes
Route::resource('quiz', 'QuizzesController');
Route::resource('question', 'QuestionsController');

Route::get('test-odds-api', 'MainController@test')->name('test-odds-api');
Route::get('dummy', 'AccountsController@form')->name('dummy');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('user', 'UsersController');
    Route::resource('role', 'RoleController');
    Route::resource('permission', 'PermissionController');    
});

// Subscription + payments
//create subscription
// Route::get('/signup/plansform', 'SubscriptionControl@plans')->name('plans-form');

// Route::group(['middleware' => 'auth'], function () {	
// 	//process join form
// 	Route::post('/subscription', 'SubscriptionControl@join');
// 	//View subscriptions
// 	Route::get('/subscription.manage', 'SubscriptionControl@manage')->name('user.profile');
// 	//cancel subscription
//     Route::get('/subscription.cancel', 'SubscriptionControl@cancel');
    
//     Route::get('payments', 'SubscriptionControl@payments')->name('payments');    
// });

// API
// Route::post(
//     'braintree/webhook',
//     '\Laravel\Cashier\Http\Controllers\WebhookController@handleWebhook'
// );