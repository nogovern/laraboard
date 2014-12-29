<?php
// DB::listen(function($sql, $bindings, $time)
// {
// 	var_dump($sql);
// });

Route::controller('posts', 'PostsController');

Route::get('/', function()
{	
	return Redirect::to('posts');
});

Route::get('articles/{search?}', function($search = null) 
{
	if($search)
	{
		// $finder = App::make('\Leojang\Search\Search');
		return Search::article($search);
	}

	return Article::all();
});