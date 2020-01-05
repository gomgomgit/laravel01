<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
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
	        User::insert([
	        	'name' => $faker->name,
	        	'password' => encrypt($faker->password),
	        	'email' => $faker->email,
	        	'alamat' => $faker->address,
	        	'tanggal_lahir' => $faker->dateTime($max = 'now', $timezone = null)
	        ]);
		}
    }
}
