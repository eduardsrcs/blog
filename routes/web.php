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

Route::get('/post/remove/{id}', 'PostsController@remove');
Route::get('/post/update/{id}', 'PostsController@updateForm');
Route::post('/updatepost', 'PostsController@updatePost')->name('post.update');

Route::get('/post/writecomment/{id}', function($id){return view('createcommentform', compact('id'));});
Route::post('/createcomment', 'PostsController@createComment')->name('comment.create');

Route::get('/search', 'SearchController@search');
Route::get('/s', function () { return view('search'); });


Route::get('/files', function () { return view('files'); });
Route::post('/files/upload', 'ImageController@upload')->name('image.upload');
