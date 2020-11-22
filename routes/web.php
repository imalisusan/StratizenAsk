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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('profile', 'HomeController@profile')->name('profile');

Route::resource('posts', 'PostController');

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
Route::get('/search', 'HomeController@search')->name('search');

=======
>>>>>>> parent of 4dfb59b... 00_Laravel search functionality 01_ FAQ UI modification
=======
>>>>>>> parent of 49f973d... Merge pull request #36 from imalisusan/Whitneycommits
=======
>>>>>>> parent of 25e1103... Merge pull request #37 from imalisusan/imali
Route::get('/index_admin', 'PostController@index_admin')->name('index_admin');

Route::get('/update_status/{post}', 'PostController@update_status')->name('update_status');

Route::get('/close_post/{post}', 'PostController@close_post')->name('close_post');

Route::resource('/admin-panel/users', 'UserController'); 

Route::resource('/admin-panel/courses', 'CourseController'); 

Route::get('/faq', 'HomeController@faq')->name('faq');

Route::get('/comments/{post_id}', 'CommentController@store')->name('comments_store');

Route::resource('comments', 'CommentController');