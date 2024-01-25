<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [

            [

               'name'=>'Admin',

               'email'=>'admin@test.com',

               'user_type'=>'admin',

               'password'=> bcrypt('password'),

            ],

            [

               'name'=>'customer',

               'email'=>'customer@test.com',

               'user_type'=>'customer',

               'password'=> bcrypt('password'),

            ],

            [

               'name'=>'venue',

               'email'=>'venue@test.com',

               'user_type'=>'venue',

               'password'=> bcrypt('password'),

            ],

            [

                'name'=>'catering',
 
                'email'=>'catering@test.com',
 
                'user_type'=>'catering',
 
                'password'=> bcrypt('password'),
 
             ],

        ];

        foreach ($users as $key => $user)
        {
            User::create($user);
        }
    }
}

//command to run the seeder is php artisan db:seed --class=CreateUsersSeeder