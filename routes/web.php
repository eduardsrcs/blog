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

Route::get('/tm', function () { return view('tm');});

Route::get('/posts', 'PostsController@posts');
// Route::get('/posts/{$id}', 'PostsController@post');
Route::get('/newpostform', function () { return view('newpostform'); });
Route::get('/posts/{id}', 'PostsController@post');
Route::post('/storepost', 'PostsController@storePost')->name('post.upload');

Route::get('/files', function () { return view('files'); });
Route::post('/files/upload', 'ImageController@upload')->name('image.upload');
