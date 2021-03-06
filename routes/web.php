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


Auth::routes();

Route::get('/', [
	'as' => 'page.index',
	'uses' =>'PageController@Index'
]);

Route::get('/categories', [
	'as' => 'catalog.index',
	'uses' =>'CatalogController@index'
]);

Route::get('/category/{slug}', [
	'as' => 'catalog.slug',
	'uses' =>'CatalogController@listPorudcts'
]);

Route::get('/product/{slug}', [
	'as' => 'product.slug',
	'uses' =>'CatalogController@getProduct'
]);

Route::get('/products', [
	'as' => 'product.all',
	'uses' =>'CatalogController@getAllProduct'
]);

Route::get('/news', [
            'as' => 'news.index',
            'uses' => 'NewsController@getAllNews'
]);

Route::get('/news/{slug}', [
    'as' => 'news.slug',
    'uses' => 'NewsController@getSingleNews'
]);

Route::get('/page/{slug}', [
	'as' => 'page.get',
	'uses' =>'PageController@getPage'
]);
