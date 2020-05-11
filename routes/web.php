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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Original Route ng Home
Route::get('/home', 'HomeController@index')->name('home');

//Two parameters pag resource gamit kaya may * (asterisk)
Route::Resource('document', 'DocumentController')->name('*', 'document');
Route::Resource('user', 'UserController')->name('*', 'user');

//Documents
Route::get('/received','HomeController@received')->name('received');
Route::get('/outgoing','HomeController@outgoing')->name('outgoing');
Route::get('/internal','HomeController@internal')->name('internal');
Route::get('/closed','HomeController@closed')->name('closed');

//Inboxs
Route::get('/myreceived','HomeController@myreceived')->name('myreceived');
Route::get('/myoutgoing','HomeController@myoutgoing')->name('myoutgoing');
Route::get('/myinternal','HomeController@myinternal')->name('myinternal');
Route::get('/myclosed','HomeController@myclosed')->name('myclosed');

//
Route::get('/report','HomeController@report')->name('report');
Route::get('/account','HomeController@account')->name('account');
Route::get('/role','HomeController@role')->name('role');

//
Route::get('/faqs','HomeController@faqs')->name('faqs');
Route::get('/downloadable','HomeController@downloadable')->name('downloadable');
Route::get('/settings','HomeController@settings')->name('settings');

//
Route::get('/reply','HomeController@reply')->name('reply');

//Tab Layout
Route::get('/tab_received','HomeController@tab_received')->name('tab_received');
Route::get('/tab_myreceived','HomeController@tab_myreceived')->name('tab_myreceived');
Route::get('/tab_account','HomeController@tab_account')->name('tab_account');
Route::get('/tab_help','HomeController@tab_help')->name('tab_help');