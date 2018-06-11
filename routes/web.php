<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Basic Routes

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('about',function(){
    return view('about');
});

Route::post('foo/bar',function(){
    return "Hello post method";
});

Route::put('foo/bar',function(){
    return "Hello put method";
});

Route::delete('foo/bar',function(){
    return "Hello delete method";
});

Route::match(['get', 'post'], 'show', function () {
    return 'Hello get and post';
});

Route::any('foo',function(){
    return "Hello any method";
});

// Route with parameter
Route::get('user/{id}',function($id){
    return 'User '.$id;
});

Route::get('member/{name?}', function ($name = "John") {
    return "Hello ".$name;
});

// Route Regular Expression Constraints
Route::get('employee/{name?}', function ($name="Doe") {
    return "Hello ".$name;
})->where('name', '[A-Za-z]+');

Route::get('person/{id}', function ($id) {
    return "Your id is ".$id;
})->where('id', '[0-9]+');

Route::get('student/{id}/{name}', function ($id, $name) {
    return "Hello ".$name." Your id is ".$id;
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

// Named Routes
Route::get('team/profile', ['as' => 'profile', function () {
    return "Hello our team.";
}]);

Route::get('customer/profile', [
    'as' => 'customerprofile', 
    'uses' => 'UserController@showCustomerProfile'
]);

// Route Prefixes
Route::group(['prefix' => 'admin'], function () {
    Route::get('users', function ()    {
        // Matches The "/admin/users" URL
        return "This is user data";
    });
});

Route::group(['prefix' => 'accounts/{account_id}'], function () {
    Route::get('detail', function ($account_id)    {
        // Matches The accounts/{account_id}/detail URL
        return "this is ".$account_id;
    });
});


// Blade Template Route
Route::get('/','BasicController@home');