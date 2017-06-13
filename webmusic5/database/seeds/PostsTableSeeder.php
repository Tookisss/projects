<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder {
    public function run() {
        DB::table('posts')->get();

        $posts = array(
            array(
                'user_id'=>1,
                'data_id'=>1,
                'post_title'=>'testas1',
                'post_message'=>'testas2',
                'created_at'=>'2017-01-01 12:12:12'
            ),

            array(
                'user_id'=>1,
                'data_id'=>1,
                'post_title'=>'testas3',
                'post_message'=>'testas4',
                'created_at'=>'2017-01-01 12:12:12'
            ),

            array(
                'user_id'=>1,
                'data_id'=>1,
                'post_title'=>'testas5',
                'post_message'=>'testas6',
                'created_at'=>'2017-01-01 12:12:12'
            )
        );

        DB::table('posts')->insert($posts);
    }
}
