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

Route::get('/', 'HomeController@index')->name('public.home');
Route::get('/contatti', 'HomeController@contatti')->name('contatti.show');
Route::post('/contatti', 'HomeController@contattiStore')->name('contatti.store');
Route::get('/grazie', 'HomeController@grazie')->name('contatti.grazie');

Route::get('/blog', 'PostController@index')->name('blog');
Route::get('/blog/{slug}', 'PostController@show')->name('blog.show');

Auth::routes(['register' => false]);

Route::middleware('auth')->prefix('admin')->namespace('Admin')->name('admin.')->group(function() {
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('/posts','PostController');
});
