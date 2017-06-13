<?php

use Illuminate\Database\Seeder;

class Data_tagTableSeeder extends Seeder {
    public function run() {
        DB::table('data_tag')->get();

        $data_tags = array(
            array(
                'data_id'=>1,
                'tag_id'=>1,
            ),

            array(
                'data_id'=>2,
                'tag_id'=>1,
            ),

            array(
                'data_id'=>3,
                'tag_id'=>1,
            ),

            array(
                'data_id'=>4,
                'tag_id'=>2,
            ),

            array(
                'data_id'=>5,
                'tag_id'=>2,
            ),

            array(
                'data_id'=>6,
                'tag_id'=>2,
            ),

            array(
                'data_id'=>7,
                'tag_id'=>3,
            ),

            array(
                'data_id'=>8,
                'tag_id'=>3,
            ),

            array(
                'data_id'=>9,
                'tag_id'=>3,
            ),

            array(
                'data_id'=>10,
                'tag_id'=>1,
            )
        );

        DB::table('data_tag')->insert($data_tags);
    }
}
