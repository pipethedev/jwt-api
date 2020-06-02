<?php

Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function(){
    Route::post('signin', 'SignInController');
    Route::get('login', 'SignInController')->name('login');
    Route::post('signout', 'SignOutController');
    Route::get('me', 'MeController');
});