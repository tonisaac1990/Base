<?php

/**
 * Created by PhpStorm.
 * User: pc
 * Date: 31/08/2015
 * Time: 2:35
 */

 use \Illuminate\Database\Seeder;
use \Faker\Factory as Faker;

class TagsTableSeeder extends Seeder {
    public  function run(){

        $faker = Faker::create();

        for($i = 0; $i < 30; $i ++){
            \DB::table('tags')->insert(
                array(
                    'name' => $faker->word,
                    'description' => $faker->paragraph(3, true)
                )
            );
        }


    }

}