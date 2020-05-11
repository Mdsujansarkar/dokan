<?php

use Illuminate\Support\Facades\Route;

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


Route::get(	'/',							'HomeController@index' )					->name( 'index' );
/**
 * Backend Controller
 */
Route::get( '/backends',					'AdminController@index' )					->name( 'index' );

Route::get( '/catagory/add',				'CategoryController@addCategory' )			->name( 'addCategory' );
Route::post('/catagory/add',				'CategoryController@categoryInsert' )		->name( 'add-category' );
Route::get( '/catagory/manage',				'CategoryController@categoryManage' )		->name( 'manageCategory' );
Route::get( '/category/published/{id}',		'CategoryController@categoryPublished' ) 	->name( 'unpublished-category' );
Route::get( '/category/unblished/{id}',		'CategoryController@categoryUnpublished' )	->name( 'published-category' );
Route::get( '/category/edit/{id}',			'CategoryController@categoryEdit' )			->name( 'edit-category' );
Route::post('/category/update',				'CategoryController@categoryupdate' )		->name( 'update-category' );
