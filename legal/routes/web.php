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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//auth
Route::group(['middleware' => 'auth'], function () {		
	//profile 
	Route::get('/profile', 'ProfileController@index')->name('profile.index');

});


//admin
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
	
	//dashboard 
	Route::get('/dashboard', 'Admin\DashboardController@index')->name('admin.dashboard.index');

	//news
	Route::resource('/news', 'Admin\NewsController');


});