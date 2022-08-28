<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $users = [
         [
            'id' => 1,
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => \Hash::make('password') // password
         ],
         [
            'id' => 2,
            'name' => 'Customer',
            'email' => 'customer@customer.com',
            'password' => \Hash::make('password') // password
         ]

        ];
    }
}
