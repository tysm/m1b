<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Joana Darck',
            'email' => 'jodarck@gmail.com',
            'password' => bcrypt('123456'),
        ]);

    }
}
