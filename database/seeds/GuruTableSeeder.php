<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class GuruTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $faker = Faker::create('App\User');
            for ($i=0; $i < 5; $i++) {
            DB::table('users')->insert([
                'nama' 						=> $faker->name,
                'no_induk' 				=> mt_rand(1000000000, mt_getrandmax()),
                'jk' 							=> 'L',
                // 'status' 					=> 'A',
                // 'status_sekolah' 	=> 'Y',
                'email' 					=> 'guru@guru.com',
                // 'password' 				=> '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'
                'password'				=> Hash::make('guru123'),
            ]);
        }
    }
}
