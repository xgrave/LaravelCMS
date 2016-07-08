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
    return view('welcome');
});


//Route::resource('posts', 'PostsController');

Route::get('contact', 'PostsController@contact');

Route::get('post/{id}/{name}','PostsController@show_post');

/*

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return 'About page.';
});

Route::get('/contact', function () {
    return 'Contact us.';
});

Route::get('/post/{id}/{name}',function($id, $name){
	return 'The ID is ' . $id . ' and the name is ' . $name;

});

Route::get('admin/posts/example', array('as'=>'admin.home' , function(){
	$url = route('admin.home');
	return $url;
}));

*/