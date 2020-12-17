<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            [
                'firstname' => 'Kim',
                'lastname' => 'Fiaq'
            ],
            [
                'firstname' => 'John',
                'lastname' => 'Lenon'
            ]
        ]);
    }
}
