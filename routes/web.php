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

Route::get('/', 'FrontEndController@index')->name('index');

Route::get('/results', function() {
	$posts = \App\Post::where('title', 'like', '%' . request('query') . '%')->get();

	return view('results')->with('posts', $posts)
						  ->with('title', 'Search Result: ' . request('query'))
    					  ->with('settings', \App\Setting::first())
    					  ->with('categories', \App\Category::take(5)->get())
    					  ->with('query', request('query'));
});

Route::get('/post/{slug}', 'FrontEndController@singlePost')->name('post.single');

Route::get('/category/{id}', 'FrontEndController@category')->name('category.single');

Route::get('/tag/{id}', 'FrontEndController@tag')->name('tag.single');

Auth::routes();


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {

	Route::get('/dashboard', 'HomeController@index')->name('home');

	Route::get('/post/create', 'PostsController@create')->name('post.create');

	Route::post('/post/store', 'PostsController@store')->name('post.store');

	Route::get('/post/edit/{id}', 'PostsController@edit')->name('post.edit');

	Route::post('/post/update/{id}', 'PostsController@update')->name('post.update');

	Route::get('/post/delete/{id}', 'PostsController@destroy')->name('post.delete');

	Route::get('/posts', 'PostsController@index')->name('posts');

	Route::get('/posts/trashed', 'PostsController@trashed')->name('posts.trashed');

	Route::get('/posts/kill/{id}', 'PostsController@kill')->name('post.kill');

	Route::get('/posts/restore/{id}', 'PostsController@restore')->name('post.restore');

	Route::get('/category/create', 'CategoriesController@create')->name('category.create');

	Route::post('/category/store', 'CategoriesController@store')->name('category.store');

	Route::get('/categories', 'CategoriesController@index')->name('categories');

	Route::get('/category/edit/{id}', 'CategoriesController@edit')->name('category.edit');

	Route::get('/category/delete/{id}', 'CategoriesController@destroy')
		->name('category.delete');

	Route::post('/category/update/{id}', 'CategoriesController@update')
		->name('category.update');

	Route::get('/tags', 'TagsController@index')->name('tags');

	Route::get('/tag/edit/{id}', 'TagsController@edit')->name('tag.edit');

	Route::post('/tag/store', 'TagsController@store')->name('tag.store');

	Route::post('/tag/update/{id}', 'TagsController@update')->name('tag.update');

	Route::get('/tag/destroy/{id}', 'TagsController@destroy')->name('tag.destroy');

	Route::get('/tag/create', 'TagsController@create')->name('tag.create');

	Route::get('/users', 'UsersController@index')->name('users');

	Route::get('/user/create', 'UsersController@create')->name('user.create');

	Route::post('/user/store', 'UsersController@store')->name('user.store');

	Route::get('user/admin/{id}', 'UsersController@admin')->name('user.admin');

	Route::get('user/not-admin/{id}', 'UsersController@notAdmin')->name('user.not.admin');

	Route::get('user/profile', 'ProfilesController@index')->name('user.profile');

	Route::get('user/delete/{id}', 'UsersController@destroy')->name('user.delete');

	Route::post('/user/profile/update', 'ProfilesController@update')->name('user.profile.update');

	Route::get('/settings', 'SettingsController@index')->name('settings');

	Route::post('/settings/update', 'SettingsController@update')->name('settings.update');
});











