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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', 'TestController@test');
Route::get('/invcaptcha', 'TestController@invcaptcha');

Route::resource('/projectFiles', 'ProjectFileController');





Route::get('login',    											'LoginController@login')->name('login');

Route::post('admin/login',   									'LoginController@authenticated');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){


	Route::get('/',												'HomeslideController@index');

	Route::resource('user',										'UserController');

	Route::resource('homeslide',								'HomeslideController');

	Route::resource('whychoose',								'WhychooseController');

	Route::resource('faq',										'FaqController');

	Route::resource('about',									'AboutController');

	Route::resource('indexdata',								'IndexdataController');

	Route::resource('gallery',									'GalleryController');

	Route::resource('milestone',								'MilestoneController');

	Route::resource('blogcategory',								'BlogcategoryController');

	Route::resource('blog',										'BlogController');
	
	Route::resource('tag',										'TagController');

	Route::resource('business',									'BusinessController');

	Route::resource('business/{businessId}/businessimage',		'BusinessimageController');

	Route::resource('csr',										'CsrController');

	Route::resource('csr/{csrId}/csrimage',						'CsrimageController');	

	Route::resource('teamcategory',				    			'TeamcategoryController');

	Route::resource('team',										'TeamController');

	Route::resource('status',									'ProjectStatusController');

	Route::resource('projecttype',								'ProjectTypeController');

	Route::resource('city',										'CityController');

	Route::resource('projectfacilities',						'ProjectFacilitiesController');

	Route::resource('project',									'ProjectController');

	Route::resource('message',									'MessageController');

	


});