<?php

use Illuminate\Database\Seeder;

class AnonymousesTableSeeder extends Seeder {
    public function run() {
        DB::table('anonymouses')->get();

        $anonymouses = array(
            array(
                'name'=>'TestasAnonimas',
                'email'=>'anonimas@example.com',
                'text'=>'testuoju'
            )
        );

        DB::table('anonymouses')->insert($anonymouses);
    }
}
