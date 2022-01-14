<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Rodrigo Severo',
            'email' => 'rodrigoseverodev@gmail.com',
            'created_at' => date("Y-m-d h:i:s"),
            'password' => bcrypt('12345678'),
        ]);
        // DB::table('users')->insert([
        //     'name' => 'Rodrigo Severo',
        //     'email' => 'rodrigoseverodev@gmail.com',
        //     'password' => Hash::make('password'),
        // ]);
    }
}