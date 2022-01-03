<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
      public function run()
    {
        DB::table('users')->insert([
            'id'=> '1',
            'name' => 'admin',
            'email' => 'fdanielapuerta@gmail.com',
            'password' => 'zdtWQW63'
            
        ]);

       DB::table('role_user')->insert([
            'role_id'=> '1',
            'user_id'=> '1',
            'user_type'=> 'App\Models\User'
        ]);


    }
}
