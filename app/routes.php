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
		//
		// 결과는 Illuminate\Support\Collection 의 확장 타입인 Iluminate\Database\Eloquent\Collection
		// 
		// Search::post($search)
		// Search::article($search)
		// Search::all()
		
		$finder = App::make('\Leojang\Search\Search');
		return $finder->all($search);
	}

	// var_dump(Post::all());
	return Post::all();
});

Route::get('posts/{search?}', function($search = null) 
{
	if($search)
	{
		$finder = App::make('\Leojang\Search\Search');
		return $finder->post($search);
	}

	return Post::all();
});

Route::get('articles/{search?}', function($search = null) 
{
	if($search)
	{
		$finder = App::make('\Leojang\Search\Search');
		return $finder->article($search);
	}

	return Article::all();
});