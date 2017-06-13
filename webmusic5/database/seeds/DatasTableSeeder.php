<?php

use Illuminate\Database\Seeder;

class DatasTableSeeder extends Seeder {
    public function run() {
        DB::table('data')->get();

        $datas = array(
            array(
                'id'=>1,
                'tags_id'=>1,
                'image'=>'image/aEAG6r2fi41hbabZlVlp96DwibGmFKcNEPXqqXmt.jpeg',
                'title'=>'Justin Bieber - Sorry',
                'artist'=>'Justin Bieber',
                'length'=>'03:25',
                'genre'=>'Dance',
                'released'=>'2017-01'
            ),

            array(
                'id'=>2,
                'tags_id'=>1,
                'image'=>'image/AH4st6RzStTqxQ3Pyn0XNWeemjvQTQWIHOR5RGEH.jpeg',
                'title'=>'Clean Bandit - Simphony',
                'artist'=>'Clean Bandit',
                'length'=>'04:02',
                'genre'=>'Pop',
                'released'=>'2017-02'
            ),

            array(
                'id'=>3,
                'tags_id'=>1,
                'image'=>'image/Hy9HaHF73IKyvDc8kli3IAh6KGLux1K4Z4AZH8lJ.jpeg',
                'title'=>'Jonas Blue - Mama ft. William Singe',
                'artist'=>'Jonas Blue',
                'length'=>'02:59',
                'genre'=>'Pop',
                'released'=>'2017-04'
            ),

            array(
                'id'=>4,
                'tags_id'=>2,
                'image'=>'image/KTWkLI9ILP6BjovB6LqM1F4PF3cvzSQRJ7JWvB68.jpeg',
                'title'=>'Charlie Puth - Attention',
                'artist'=>'Charlie Puth',
                'length'=>'03:52',
                'genre'=>'Pop',
                'released'=>'2016-11'
            ),

            array(
                'id'=>5,
                'tags_id'=>2,
                'image'=>'image/2fjtfs5p8XxOF1OoITmXJBhDFhAUiYttrjW4UWGO.jpeg',
                'title'=>'Ed Sheeran - Galway Girl',
                'artist'=>'Ed Sheeran',
                'length'=>'03:16',
                'genre'=>'Pop',
                'released'=>'2016-12'
            ),

            array(
                'id'=>6,
                'tags_id'=>2,
                'image'=>'image/SwzfbU0r9RFwHZomNeETWqL8sNdOefNamjgCZOZP.jpeg',
                'title'=>'Bruno Mars - That`s What I Like',
                'artist'=>'Bruno Mars',
                'length'=>'03:30',
                'genre'=>'Pop',
                'released'=>'2016-05'
            ),

            array(
                'id'=>7,
                'tags_id'=>3,
                'image'=>'image/ZFsPbIl6K884w7AhtFQeURoWhvkwf11hMbUKSICV.jpeg',
                'title'=>'Dkay - Westhill',
                'artist'=>'Dkay',
                'length'=>'02:58',
                'genre'=>'Hip-Hop',
                'released'=>'2016-07'
            ),

            array(
                'id'=>8,
                'tags_id'=>3,
                'image'=>'image/SuVvahksiPO0RAi1y5lFi0l2DyWuQ9fCESFhZNxc.jpeg',
                'title'=>'Maren Morris - My Church',
                'artist'=>'Maren Morris',
                'length'=>'03:25',
                'genre'=>'Country',
                'released'=>'2016-11'
            ),

            array(
                'id'=>9,
                'tags_id'=>3,
                'image'=>'image/T5hRkKHodem74nvLLHr87UeeYdB2jOEpsLOkx5kL.jpeg',
                'title'=>'twenty one pilots: Stressed Out',
                'artist'=>'twenty one pilots',
                'length'=>'03:45',
                'genre'=>'Pop',
                'released'=>'2017-01'
            ),

            array(
                'id'=>10,
                'tags_id'=>1,
                'image'=>'image/yDeecy2qYUp3Aa5fUj2NNN0NPNp3UU1L9GmML6Dz.jpeg',
                'title'=>'Megadeth - Dystopia',
                'artist'=>'Megadeth',
                'length'=>'05:15',
                'genre'=>'Metal',
                'released'=>'2017-03'
            )
        );

        DB::table('data')->insert($datas);
    }
}
