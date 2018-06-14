<?php
// ส่งไปยัง Controller BasicController
Route::get('/','BasicController@index');
Route::get('about','BasicController@about');
Route::get('service','BasicController@service');
Route::get('portfolio','BasicController@portfolio');
Route::get('contact','BasicController@contact');

// Register
Route::get('register','BasicController@register');
Route::post('register_process','BasicController@register_process');

// Province
Route::get('province','BasicController@province');