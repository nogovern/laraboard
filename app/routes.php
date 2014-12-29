<?php
// DB::listen(function($sql, $bindings, $time)
// {
// 	var_dump($sql);
// });

Route::get('/', function()
{	
	$search = Request::get('q');
	if($search)
	{
		// app.php 에 alias 를 등록하면 Search::all() 방식으로 접근 가능함
		return Search::all($search);
	}

	// var_dump(Post::all());
	return Post::all();
});

Route::get('posts/{search?}', function($search = null) 
{
	if($search)
	{
		// $finder = App::make('\Leojang\Search\Search');
		return Search::post($search);
	}

	return Post::all();
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