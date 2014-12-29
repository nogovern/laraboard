<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ArticlesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Article::create([
				'subject'	=> $faker->sentence(5),
				'content'	=> $faker->text()
			]);
		}
	}

}