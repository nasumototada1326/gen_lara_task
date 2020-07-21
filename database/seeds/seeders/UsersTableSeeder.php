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
            [
            'name' => 'あああ',
            'email' => 'namo153@gmail.com',
            'password' => Hash::make('gen132652')
            ],[
            'name' => 'いいい',
            'email' => 'test2@test.com',
            'password' => Hash::make('password123')   
            ]
        ]);
    }
}
