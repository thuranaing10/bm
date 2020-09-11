<?php
Route::get('/',function(){
	return view('welcome');
});
Route::get('/home', 'HomeController@index');
Route::get('facebook', function () {
    return view('facebook');
});

Route::get('auth/facebook', 'Auth\FacebookController@redirectToFacebook');
Route::get('auth/facebook/callback', 'Auth\FacebookController@handleFacebookCallback');

