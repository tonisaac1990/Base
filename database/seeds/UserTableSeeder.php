<?php

/**
 * Created by PhpStorm.
 * User: pc
 * Date: 31/08/2015
 * Time: 2:35
 */

 use \Illuminate\Database\Seeder;
use \Faker\Factory as Faker;

class UserTableSeeder extends Seeder {
    public  function run(){

        $faker = Faker::create();
        for($i=0; $i < 30; $i ++){
            $id = \DB::table('users')->insertGetId(
                array(
                    'fist_name'=> $faker->firstName,
                    'last_name' => $faker->lastName,
                    'email' => $faker->email,
                    'password' => \Hash::make('123456'),
                    'type' => 'user'
                )
            );

            \DB::table('user_profiles')->insert(
                array(
                    'user_id' => $id,
                    'bio' => $faker->paragraph(rand(2,5)),
                    'website' => 'http://www.' . $faker->domainName,
                    'twitter' => 'http://www.twitter.com/' . $faker->userName,
                )
            );
        }

    }

}