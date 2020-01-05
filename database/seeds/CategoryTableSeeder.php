<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
use Faker\Factory as Faker;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create('id_ID');

        for($i = 1; $i <= 5; $i++){
            Category::insert([
            	'name' => $faker->name
            ]);
        }
    }
}
