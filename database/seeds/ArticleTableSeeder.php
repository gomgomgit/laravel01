<?php

use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Faker\Factory as Faker;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $category_id = Category::pluck('id');
        $user_id = User::pluck('id');

        for($i = 1; $i <= 5; $i++){
        	Article::insert([
        		'category_id' => $faker->randomElement($category_id),
        		'title' => $faker->sentence($nbWords = 4, $variableNbWords = true),
        		'content' => $faker->paragraph($nbSentences = 8, $variableNbSentences = true),
        		'created_by' => $faker->randomElement($user_id),
        		'status' => $faker->numberBetween($min = 0, $max = 1)
        	]);
        }
    }
}
