<?php namespace Leojang\Search;

use Leojang\Board\Posts\PostRepository;
use Article;

class Search {

	protected $posts;

	public function __construct(PostRepository $posts)
	{
		$this->posts = $posts;
	}

	public function post($search)
	{
		return $this->posts->getByAll($search);
	}

	public function article($search)
	{
		return Article::where(function($query) use($search)
		{
			$query->where('subject', 'LIKE', "%{$search}%")
				  ->orWhere('content', 'LIKE', "%{$search}%");
		})->get();
	}

	// 모든 결과 보기
	public function all($search)
	{
		$posts = $this->posts->getByAll($search);

		$articles = Article::where(function($query) use($search)
		{
			$query->where('subject', 'LIKE', "%{$search}%")
				  ->orWhere('content', 'LIKE', "%{$search}%");
		})->get();

		return $posts->merge($articles);
	}
}