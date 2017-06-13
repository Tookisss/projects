<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder {
    public function run() {
        DB::table('tags')->get();

        $tags = array(
            array(
                'id'=>1,
                'title'=>'MTV',
            ),

            array(
                'id'=>2,
                'title'=>'Vevo',
            ),

            array(
                'id'=>3,
                'title'=>'Grammy',
            )
        );

        DB::table('tags')->insert($tags);
    }
}
