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
Route::get('website/educacao', 'StaticPageController@getEducacao')->name('educacao');
Route::get('website/informatica', 'StaticPageController@getInformatica')->name('informatica');
Route::get('website/teceduc', 'StaticPageController@getTeceduc')->name('teceduc');

/* WebBlog */
Route::get('webblog/mei', 'DynamicPageController@getMei')->name('mei');
Route::get('webblog/progweb', 'DynamicPageController@getProgweb')->name('progweb');
Route::get('webblog/roboeduc', 'DynamicPageController@getRoboeduc')->name('roboeduc');

/* PainelAdmin */
Route::get('paineladmin/painelsite', 'PainelAdminController@getPainelsite')->name('painelsite');