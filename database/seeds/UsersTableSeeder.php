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
        DB::table('users')->insert([
            "name"=>'admin',
            "email"=>'admin@gmail.com',
            "role_id"=>1,
            "phone"=>'01966171301',
            "password"=>bcrypt('12345678')
        ]);


        DB::table('users')->insert([
            "name"=>'user',
            "email"=>'user@gmail.com',
            "role_id"=2,
            "phone"=>'01966171301',
            "password"=>bcrypt('12345678')
        ]);
    }
}
