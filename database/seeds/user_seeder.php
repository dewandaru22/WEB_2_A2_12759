<?php

use Illuminate\Database\Seeder;

class user_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create(); //import library faker

        $limit = 20; //batasan berapa banyak data

        for ($i = 0; $i < $limit; $i++) {
            DB::table('user')->insert([ //mengisi datadi database
                'nama' => $faker->name,
                'email' => $faker->unique()->email,
                'username' => $faker->username,
                'password' => $faker->password,
            ]);
        }
    }
}
