<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	$posts = App\Post::orderBy('date', 'desc')->get();

    return view('welcome', [
    	'posts' => $posts
    ]);
});

/*
Route::get('/post/{post_id}', function ($post_id) {
	if( $post_id == 'create' )

	$post = App\Post::find($post_id);

    return view('post.show', [
        'post' => $post
    ]);
});
*/

Route::auth();

Route::get('/home', 'HomeController@index');

// Resources
Route::resource('/user', 'UserController');
Route::resource('/post', 'PostController');
