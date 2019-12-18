<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // Admin
        User::create([
            'name' => 'Juan',
            'email' => 'juancagb.17@gmail.com',
            'password' => bcrypt('123456789'),
            'role' => 0
        ]);


        // Support
        User::create([
            'name' => 'Maria',
            'email' => 'support@gmail.com',
            'password' => bcrypt('123456789'),
            'role' => 1
        ]);


        // Client
        User::create([
            'name' => 'Pedro',
            'email' => 'client@gmail.com',
            'password' => bcrypt('123456789'),
            'role' => 2
        ]);




    }
}
