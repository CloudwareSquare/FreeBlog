<?php



Route::group(['middleware' => 'web', 'namespace' => 'CloudwareSquare\\Blog'], function ()
{
	/***************************************************  ADMIN ROUTES ***************************************************/
	/*Route::get('blog/admin/posts', 'BlogController@index')->name('blog.admin.posts.index');
	Route::get('blog/admin/posts/create', 'BlogController@create')->name('blog.admin.posts.create');
	Route::post('blog/admin/posts', 'BlogController@store')->name('blog.admin.posts.store');
	Route::delete('blog/admin/posts/{post}', 'BlogController@destroy')->name('blog.admin.posts.delete');
	Route::get('blog/admin/posts/{post}', 'BlogController@show')->name('blog.admin.posts.show');
	Route::get('blog/admin/posts/{post}/edit', 'BlogController@edit')->name('blog.admin.posts.edit');
	Route::post('blog/admin/posts/{post}', 'BlogController@update')->name('blog.admin.posts.update');
	*/
	Route::resource('blog/admin/posts', 'BlogController');

	Route::resource('blog/admin/categories', 'CategoriesController');
});