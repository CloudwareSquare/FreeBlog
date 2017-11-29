<?php

/***************************************************  PUBLIC ROUTES ***************************************************/
Route::get('blog', function(){$posts=\Cloudware\Blog\Post::joinUser()->get(); return view('blog::index', compact('posts'));})->name('blog');
Route::get('blog/about', function(){ return view('blog::about'); })->name('blog_about');
Route::get('blog/post/{post}', function($id){$post=\Cloudware\Blog\Post::joinUser()->where('posts.id', '=', $id)->first(); return view('blog::post', compact('post'));})->name('blog_post');
Route::get('blog/contact', function(){ return view('blog::contact'); })->name('blog_contact');


Route::group(['middleware' => 'web'], function ()
{
	/***************************************************  ADMIN ROUTES ***************************************************/
	Route::get('blog/admin/posts', 'Cloudware\Blog\BlogController@index')->name('blog_admin_index');
	Route::get('blog/admin/posts/create', 'Cloudware\Blog\BlogController@create')->name('blog_create');
	Route::post('blog/admin/posts', 'Cloudware\Blog\BlogController@store')->name('blog_store');
	Route::delete('blog/admin/posts/{post}', 'Cloudware\Blog\BlogController@destroy')->name('blog_destroy');
	Route::get('blog/admin/posts/{post}', 'Cloudware\Blog\BlogController@show')->name('blog_show');
	Route::get('blog/admin/posts/{post}/edit', 'Cloudware\Blog\BlogController@edit')->name('blog_edit');
	Route::post('blog/admin/posts/{post}', 'Cloudware\Blog\BlogController@update')->name('blog_update');
});