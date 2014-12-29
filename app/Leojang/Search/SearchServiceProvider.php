<?php namespace Leojang\Search;

use Illuminate\Support\ServiceProvider;

class SearchServiceProvider extends ServiceProvider {

	public function register()
	{
		$this->app->bind('search', 'Leojang\Search\Search');
	}
}