<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {
    public function run() {
        DB::table('users')->get();

        $users = array(
            array(
                'id'=>1,
                'name'=>'Testas',
                'email'=>'example@example.com',
                'password'=>Hash::make('testas')
            )
        );

        DB::table('users')->insert($users);
    }
}
