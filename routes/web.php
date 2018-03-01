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

Route::get('/', 'StaticPageController@getHome')->name('home');

/* WebSite */
Route::get('educacao', 'StaticPageController@getEducacao')->name('educacao');
Route::get('informatica', 'StaticPageController@getInformatica')->name('informatica');
Route::get('teceduc', 'StaticPageController@getTeceduc')->name('teceduc');

/* WebBlog */
Route::get('mei', 'DynamicPageController@getMei')->name('mei');
Route::get('progweb', 'DynamicPageController@getProgweb')->name('progweb');
Route::get('roboeduc', 'DynamicPageController@getRoboeduc')->name('roboeduc');

/* PainelAdmin */
Route::get('paineladmin/painelsite', 'PainelAdminController@getPainelsite')->name('painelsite');