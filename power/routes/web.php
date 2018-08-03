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


//auth
Route::group(['middleware' => 'auth'], function () {		
	//profile 
	Route::get('/profile', 'ProfileController@index')->name('profile.index');

});




//admin
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
	Route::group(['middleware' => 'check-permission:admin'], function () {
		
		//dashboard 
		Route::get('/dashboard', 'Admin\DashboardController@index')->name('admin.dashboard.index');
		
		//programs
		Route::resource('/programs', 'Admin\ProgramsController');

		//programs prefix
		Route::group(['prefix' => 'programs/{program}'], function () {
			//modules
			Route::resource('/modules', 'Admin\ModulesController');

			//modules prefix
			Route::group(['prefix' => 'modules/{module}'], function () {
				//modules
				Route::resource('/chapters', 'Admin\ChaptersController');
			});	
		});


		

	});
});
