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


Route::get(	'/',							'HomeController@homePage' )					->name( 'index' );
Route::get( '/category/{id}',               'HomeController@singelCategory' )           ->name( 'categorySingel' );
Route::get( '/single/product/{id}',         'HomeController@singleProCon')              ->name('singleProduct');




Route::post('/product/add/cart',           'CartController@productAddCart')            ->name('add.to.cart');
Route::get('/product/add/cart',            'CartController@productAddShow')            ->name('add.to.show');
Route::post('/product/update',             'CartController@cartUpdateShow')            ->name('cart.update');
Route::get('/product/add/cart/{rowId}',    'CartController@productDelete')             ->name('delete-cart-item');



Route::get('/customer/registration',       'CustomerRegistration@registrationCustomer')->name('registration.shopping');
Route::get('/customer/login',              'CustomerRegistration@loginCustomer')       ->name('customer.login');
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
Route::get( '/category/delete/{id}',		'CategoryController@categorydelete' )		->name( 'delete-category' );
/**
 * Add Brand
 */
Route::get( '/add/brand',					'BrandController@index' )				    ->name( 'addBrand' );
Route::post('/add/brand',					'BrandController@brandSave' )				->name( 'new-brand' );
Route::get( '/manage/brand',				'BrandController@manageBrand' )				->name( 'manageBrand' );
Route::get( '/unpublish/brand/{id}',		'BrandController@unpublishBrand' )			->name( 'unpublished-brand' );
Route::get( '/publish/brand/{id}',			'BrandController@publishBrand' )			->name( 'published-brand' );
Route::get( '/edit/brand/{id}',				'BrandController@editBrand' )				->name( 'edit-brand' );
Route::post('/update/brand',				'BrandController@updateBrand' )				->name( 'update-brand' );
Route::get( '/delete/brand/{id}',			'BrandController@deleteBrand' )				->name( 'delete-brand' );
/**
 * Add Product
 */

Route::get( '/product/add',					'ProductController@index')				    ->name( 'addProduct' );
Route::post( '/product/add',                'ProductController@saveProduct')	        ->name('save-product' );
Route::get('/product/manage',               'ProductController@manageProduct')          ->name('manage.product');
Route::get('/unpublished/produc/{id}',      'ProductController@unpublisProduct')        ->name('unpublished.product');
Route::get('/published/product/{id}',       'ProductController@publisProduct')          ->name('published.product');
Route::get('/edit/product/{id}',            'ProductController@editProduct')            ->name('edit.product');
Route::post('update/product',               'ProductController@updateProduct')          ->name('update.product');





Route::get( '/test/add',                    'TestController@index')->name('test.pro');
Route::post('/test/add',                    'TestController@testSave')->name('test.product');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
