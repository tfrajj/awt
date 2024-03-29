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

Route::get('/', function () {
    $posts = App\Post::all();
    return view('welcome', ['posts' => $posts]);
});

Route::get('/post/{id}', function ($id) {
    $post = App\Post::findOrFail($id);

    return view('post', ['post' => $post]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('admin/posts', 'Admin\\PostsController');