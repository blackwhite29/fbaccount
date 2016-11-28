<?php

Route::group(['prefix' => 'admin'], function () {
    Route::resource('/fbaccount/facebook_account', 'Fbaccount\Fbaccount\Http\Controllers\FacebookAccountAdminController');
});

// User routes for facebook_account
Route::group(['prefix' => 'user'], function () {
    Route::resource('/fbaccount/facebook_account', 'Fbaccount\Fbaccount\Http\Controllers\FacebookAccountUserController');
});

// Public routes for facebook_account
Route::get('fbaccount/facebook_account', 'Fbaccount\Fbaccount\Http\Controllers\FacebookAccountPublicController@index');
Route::get('fbaccount/facebook_account/{slug?}', 'Fbaccount\Fbaccount\Http\Controllers\FacebookAccountPublicController@show');
