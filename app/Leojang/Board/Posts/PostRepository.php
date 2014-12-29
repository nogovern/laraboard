<?php namespace Leojang\Board\Posts;

use Post;

class PostRepository extends \Leojang\Core\EloquentRepository {
	
	public function __construct(Post $model)
	{
		$this->model = $model;
	}

	public function getByAll($search)
	{
		return $this->model->where(function($query) use($search)
		{
			$query->where('title', 'like', "%{$search}%")
				  ->orWhere('content', 'like', "%{$search}%");
		})->get();
	}

}