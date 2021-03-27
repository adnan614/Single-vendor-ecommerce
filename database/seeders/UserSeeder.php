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
        User::create([
            'name' => 'admin',
            'contact' => '0168092622',
            'email' => 'admin@gmail.com',
            'address' => 'uttara',
            'gender' => 'female',
            'password' => bcrypt('12315'),

        ]);
    }
}
