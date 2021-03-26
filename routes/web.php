<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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


Route::get('/dashboard','DashboardController@dashboard')->name('dashboard')->middleware('auth:admin');

Route::get('/frontend','DashboardController@frontend')->name('frontend');


Route::group(['prefix' => 'business/admin/account', 'middleware' => 'auth:admin'], function () {

    Route::post('/request/save','AdminController@AdminRequestSave')->name('business_admin_ac_request');

    Route::get('/show/request','AdminController@AdminRequestShow')->name('business_super_request');

    Route::get('/request/activate/page/{id}','AdminController@accountActivatePage')->name('business_request_accepted');

    Route::post('/request/accept/save','AdminController@accountActivateSave')->name('business_request_accept_save');

});

// Route::prefix('roles-permission/')->group(function () {

// 	Route::get('/role/page','RolePermissionController@rolePermissionPage')->name('create_role_page');

// 	Route::post('/role/page/save','RolePermissionController@roleSave')->name('role-save');

// 	Route::post('/permission/page/save','RolePermissionController@permissionSave')->name('permission-save');

	
// });

Route::group(['prefix' => 'roles-permission', 'middleware' => 'auth:admin'], function () {
    	
    Route::get('/role/page','RolePermissionController@rolePermissionPage')->name('create_role_page');

	Route::post('/role/page/save','RolePermissionController@roleSave')->name('role-save');

	Route::post('/permission/page/save','RolePermissionController@permissionSave')->name('permission-save');

});


Route::prefix('admin/')->group(function () {

	Route::get('login/','Backend\Auth\LoginController@showLoginForm')->name('admin.login');

	Route::post('/login/submit','Backend\Auth\LoginController@login')->name('admin.login.save');

	Route::post('/logout/submit','Backend\Auth\LoginController@logout')->name('admin.logout.submit');


	
});


Route::prefix('/')->group(function (){

	Route::get('/setpassword/','DashboardController@setPassword')->name('set_password');

});
