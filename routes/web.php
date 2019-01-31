
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

use Routes\HMT;

Route::view('/roomdetail', 'roomdetail');

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/test', 'TestController@test');

Route::get('/invcaptcha', 'TestController@invcaptcha');

Route::get('/',								'FrontController@index');

Route::get('/about',						'FrontController@about');

Route::get('/milestone',					'FrontController@milestone');

Route::get('/team',							'FrontController@team');

Route::get('/csr',							'FrontController@csr');

Route::get('/csrdetail/{csr}',				'FrontController@csrdetail');

Route::get('/project',						'FrontController@project');

Route::get('/projectdetail/{project}',		'FrontController@projectdetail');

Route::get('/project-viewer/{projectFile}',		'FrontController@projectViewer');

Route::get('/roomdetail/{room}',			'FrontController@roomdetail');

Route::get('/business',						'FrontController@business');

Route::get('/businessdetail/{business}',	'FrontController@businessdetail');

Route::get('/faq',							'FrontController@faq');

Route::get('/blog',							'FrontController@blog');

Route::get('/blogdetail/{blog}',			'FrontController@blogdetail');

Route::get('/contact',						'FrontController@contact');

Route::post('/contact', 					'FrontController@postContact');

Route::resource('/projectFiles', 'ProjectFileController');

Route::get('login','LoginController@login')->name('login');

Route::post('admin/login', 'LoginController@authenticated');

Route::get('login',    											'LoginController@login')->name('login');

Route::post('admin/login',   									'LoginController@authenticated');

Route::group(['prefix' => 'customer', 'middleware' => 'auth'], function(){

    Route::view('/bookroom', 'customer.index');
	Route::get('/getregister',		'CustomerController@getregister');
	Route::post('/postregister',	'CustomerController@postregister');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {

	Route::get('/',												'HomeslideController@index');

    Route::get('/{project}/projectFiles/create', 'ProjectFileController@create');
    Route::post('/{project}/projectFiles', 'ProjectFileController@store');
    Route::get('/projectFiles/{projectFile}', 'ProjectFileController@show');

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

	Route::resource('blog/{blogId}/blogimage', 				 	'BlogimageController');
	
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

	Route::resource('contact',									'ContactController');

	Route::resource('room-features',							'roomfeatureController');

	HMT::routes();
});

