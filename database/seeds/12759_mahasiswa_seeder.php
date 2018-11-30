<?php

use Illuminate\Database\Seeder;

class 12759_mahasiswa_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
		
        $limit = 20;
		
		for($i = 0; $i<$limit; $i++){
			DB::table('admin')->insert([
				'nama' => $faker->name,
				'username' => $faker->unique()->username,
				'password' => $faker->password,
				'ipv4' => $faker->ipv4,
			]);
		}
    }
}
