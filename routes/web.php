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



Route::get('/controller', [
		'uses' => 'GeneratorController@controller',
		'name' => 'controller.generator'
	]);

Route::get('model',[
		'uses' => 'GeneratorController@model',
		'name' => 'model.generator'
	]);

Route::get('/',function(){
	return view('welcome');
});

Route::get('/', [
	'as' => 'home',
	'uses' => function () {
    			return view('welcome');
	},
	]
);

Route::group(['middleware' => 'rbac'],function(){
	Route::get('/modul',function(){
		return "Halaman Modul";
	})->name('modul.upload');
	
	Route::get('roles',[
		'uses' => 'RoleController@index',
		'as' => 'roles.index',
	]);
	Route::get('dashboard', [
		'uses' => 'DashboardController@index',
		'as' => 'dashboard.index',
	]);	

	Route::get('users',[
		'uses' =>  'UserController@index',
		'as' => 'users.index'
	]);

	Route::get('user/add',[
		'uses' => 'UserController@add',
		'as' => 'user.add',
	]);

	Route::post('user/create',[
		'uses' => 'UserController@create',
		'as' => 'user.create'
	]);
	Route::get('user/{user}/edit', [
			'uses' => 'UserController@edit',
			'as' => 'user.edit',
		]);
	Route::post('user/{user}/update', [
			'uses' => 'UserController@update',
			'as' => 'user.update',
		]);

	Route::post('user/updatephoto',[
		'uses' => 'UserController@updatePhoto',
		'as' => 'user.updatephoto'
	]);
	Route::get('user/{username}',[
		'uses' => 'UserController@profile',
		'as' => 'user.profile'
	]);

	Route::get('user/{user}/delete', [
			'uses' => 'UserController@delete',
			'as' => 'user.delete',
		]);

	Route::get('role/add',[
		'uses' => 'RoleController@add',
		'as' => 'role.add',
	]);

	Route::post('role/create',[
		'uses' => 'RoleController@create',
		'as' => 'role.create',
	]);
	Route::get('role/{id}/edit',[
		'uses' => 'RoleController@edit',
		'as' => 'role.edit'
	]);

	Route::post('role/{id}/update',[
		'uses' => 'RoleController@update',
		'as' => 'role.update'
	]);

	Route::get('role/{id}/delete',[
		'uses' => 'RoleController@delete',
		'as' => 'role.delete'
	]);	

	Route::get('permissions',[
		'uses' => 'PermissionController@index',
		'as' => 'permissions.index'
	]);

	Route::get('permission/add',[
		'uses' => 'PermissionController@add',
		'as' => 'permission.add'
	]);

	Route::post('permission/create',[
		'uses' => 'PermissionController@create',
		'as' => 'permission.create',
	]);

	Route::get('/permission/{id}/edit',[
		'uses' => 'PermissionController@edit',
		'as' => 'permission.edit',
	]);

	Route::post('permission/{id}/update',[
		'uses' => 'PermissionController@update',
		'as' => 'permission.update',
	]);

	Route::get('permission/{id}/delete',[
		'uses' => 'PermissionController@delete',
		'as' => 'permission.delete',
	]);
});

Route::get('login',[
	'uses' => 'AuthController@login',
	'as' => 'auth.login',
	'middleware' => 'guest',
]);

Route::post('dologin',[
	'uses' => 'AuthController@dologin',
	'as' => 'auth.dologin',
]);

Route::get('logout',[
	'uses' => 'AuthController@logout',
	'as' => 'auth.logout',
]);            


Route::delete('products/deleteAll', 'ProductController@deleteAll')->name('products.deleteAll');
Route::resource('products', 'ProductController');
Route::delete('orders/deleteAll', 'OrderController@deleteAll')->name('orders.deleteAll');
Route::resource('orders', 'OrderController');