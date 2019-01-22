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

Route::get('/', 'MainController@index');
Route::get('/team', 'MainController@team');
Route::get('/grievance', 'MainController@grievance');
Route::get('/contact', 'MainController@contact');
// Route::get('/about', 'MainController@about');
Route::get('/services', 'MainController@services');

// Route::get('/auth/google', 'GoogleController@redirectToProvider');
// Route::get('/auth/google/callback', 'GoogleController@handleProviderCallback');


// Route::get('/auth/google', 'UserController@googleLogin')->name('google');
// Route::get('/about', 'UserController@listGoogleUser')->name('callback');

Route::post('/user/login','UserController@postLogin');
Route::post('/user/register','UserController@postRegister');
Route::get('/user/logout','UserController@getLogout');
Route::post('/search','MainController@search');
Route::post('/searchlink','MainController@searchlink');
Auth::routes();

Route::get('/resourcelist','MainController@booklist');
Route::get('/resourceupload','MainController@view')->middleware('auth');
Route::get('/upload','FilesController@upload')->middleware('auth');
Route::get('/deleteFile/{id}','FilesController@deleteFile')->name('deleteFile')->middleware('auth');
Route::get('/deleteLink/{id}','FilesController@deleteLink')->name('deleteLink')->middleware('auth');
Route::post('/handleupload','FilesController@handleupload')->middleware('auth');
Route::post('/linkupload','FilesController@linkupload')->middleware('auth');
Route::get('/download/{id}','FilesController@download');


// New added ModeCode

Route::get('/rules', function(){
  return view('rules');
});
