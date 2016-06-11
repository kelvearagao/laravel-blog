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
            'name' => 'kelve',
            'email' => 'kelvearagao@gmail.com',
            'photo' => 'photo/kelve.jpg',
            'birth_date' => '1992-09-01',
            'password' => bcrypt('secret'),
            'is_admin' => false
        ]);

         DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'photo' => 'photo/admin.jpeg',
            'birth_date' => '1991-02-05',
            'password' => bcrypt('secret'),
            'is_admin' => true
        ]);
    }
}
