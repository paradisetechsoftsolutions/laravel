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

Route::get('/', 'HomeController@index')->name('home.index');

//login pages
Auth::routes();


//auth
Route::group(['middleware' => 'auth'], function () {		
	//our-programs 
	Route::get('/our-programs', 'ProgramsController@index')->name('program.index');
	//single program page
	Route::get('/our-programs/{slug}', 'ProgramsController@preview')->name('program.preview');
	//details program page
	Route::get('/our-programs/details/{slug}', 'ProgramsController@details')->name('program.details');
	//videos program page
	Route::get('/our-programs/videos/{program}', 'ProgramsController@videos')->name('program.videos');
	//videos view program page
	Route::get('/our-programs/videos/{program}/{module}/{chapter}', 'ProgramsController@videos')->name('program.videos.view');

	//profile
	Route::get('/profile', 'ProfileController@index')->name('profile.index');


	//cart
	Route::resource('/cart', 'CartsController')->only(['index', 'store', 'destroy']);
	Route::get('/cart/payment', 'CartsController@payment')->name('cart.payment');
	Route::post('/cart/payment', 'CartsController@payment')->name('cart.payment');
	

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

		//upload images
		Route::post('/upload_image', 'Admin\ChaptersController@uploadImage')->name('admin.upload_image');
		//upload files
		Route::post('/upload_files', 'Admin\ChaptersController@uploadFiles')->name('admin.upload_files');
		//delete uploaded files using ajax
		Route::post('/delete_files', 'Admin\ChaptersController@deleteFiles')->name('admin.delete_files');
		//delete uploaded files using ajax
		Route::post('/delete_uploads', 'Admin\ChaptersUploadsController@deleteUploads')->name('admin.delete_uploads');
		

	});
});
