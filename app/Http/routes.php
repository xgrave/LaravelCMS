<?php
use App\Post;
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

/*

Route::get('/', function () {
    return view('welcome');
});


Route::resource('posts', 'PostsController');

Route::get('contact', 'PostsController@contact');

Route::get('post/{id}/{name}','PostsController@show_post');


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


|---------------------------------------------------------------------
| DATABASE Raw SQL Queries
|---------------------------------------------------------------------
*/
Route::get('/insert', function(){
	DB::insert('insert into posts(title,content) values(?, ?)', ['PHP with Laravel', 'PHP Laravel is the best thing ever.']);
});

/*
Route::get('/read', function(){
	$results = DB::select('select * from posts where id = ?', [1]);
	return $results;
	foreach($results as $result){
		return $result->title;
	}
});

Route::get('/update',function(){
	$updated = DB::update('update posts set title = "Updated Title" where id = ?', [1]);
});

Route::get('/delete', function(){
	$deleted = DB::delete('delete from posts where id = ?', [1]);
	return $deleted;
});



/*
|---------------------------------------------------------------------
| Eloquent SQL Queries  - ORM 
|---------------------------------------------------------------------

Route::get('/read',function(){
	
	$posts = Post::all();
	foreach($posts as $post){
		return $post->title;
	}
	
});

Route::get('/find',function(){
	
	$post = Post::find(2)->first();
	return $post->title;
	
	
});


Route::get('/findwhere', function(){

	$posts = Post::where('id',3)->orderBy('id','desc')->take(1)->get();
	return $posts;

});

Route::get('/findmore', function(){
	//$posts = Post::findOrFail(1);
	//return $posts;
	
	$posts = Post::where('users_count','<',50)->firstOrFail();
});

Route::get('/basicinsert',function(){
	$post = new Post;
	$post->title = 'New Eloquent Title';
	$post->content = 'New Content for Eloquent';
	$post->save();
});

Route::get('/basicinsert', function(){
	$post = Post::find(2);
	
	$post->title = 'Random Title Number' . rand(1,1000);
	$post->content = 'Random Content ' . rand(1,1000);
	
	$post->save();
	
	return $post->title . "<br/>" . $post->content;
	
});
*/

// Create using eloquent
Route::get('/create', function(){
	Post::create(['title'=>'PHP the create method','content'=>'this da content yo']);
});
/*
// Update using eloquent
Route::get('/update', function(){
	Post::where('id',2)->where('is_admin',0)->update(['title'=>'NewPHPTitle','content'=>'yesyes']);
	
});

// Delete using eloquent
Route::get('/delete', function(){
	$post = Post::find(2);
	$post->delete();
	
});

Route::get('/delete2', function(){
	Post::destroy([4,5]);
	//or
	//Post::where('is_admin', 0)->delete();
});
*/
Route::get('/softdelete', function(){
	Post::find(6)->delete();
});