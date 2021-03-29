<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
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
            'password' => bcrypt('12315'),
            'role'=>'admin'

        ]);
    }
}
