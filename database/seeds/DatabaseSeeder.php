<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
		$this->call(MahasiswaSeeder::class);
		$this->call(user_seeder::class);
		$this->call(12759_mahasiswa_seeder::class);
    }
}
