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
})->name('welcome');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('profile', 'HomeController@profile')->name('profile');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('posts', 'PostController'); 

Route::resource('users', 'UserController'); 

Route::resource('courses', 'CourseController'); 

Route::get('/pending', 'HomeController@pending')->name('pending');

Route::get('/closed', 'HomeController@closed')->name('closed');

Route::get('/faq', 'HomeController@faq')->name('faq');

Route::get('posts/{post}/publish', 'PostController@publish')->name('publish');

Route::get('posts/{post}/editStatus', 'PostController@editStatus')->name('editStatus');