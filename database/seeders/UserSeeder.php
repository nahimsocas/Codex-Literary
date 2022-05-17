<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'username' => 'admin',
            'type' => 'admin',
            'email' => 'yogesh_sikka@yahoo.com',
            'email_verified_at' => '2022-05-17 11:15:18',
            'password' => '$2y$10$H2JZErATJfYgksglU4KmyOqPVG/mKdy6Ln9XMwt41GGNTGtOaktqG'
        ]);
    }
}
