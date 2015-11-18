<?php
Route::resource('chat', 'ChatController', ['only' => ['index', 'store']]);
Route::get('auth/facebook', 'Auth\AuthController@facebook');
Route::get('auth/facebook/callback', 'Auth\AuthController@facebookHandleProviderCallback');