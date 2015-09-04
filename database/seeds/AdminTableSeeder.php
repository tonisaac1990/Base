<?php

/**
 * Created by PhpStorm.
 * User: pc
 * Date: 31/08/2015
 * Time: 2:35
 */

 use \Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder {
    public  function run(){
        \DB::table('users')->insert(
            array(
                'fist_name'=> 'Isaac',
                'last_name' => 'Alava',
                'email' => 'isaac.antonio.alava@gmail.com',
                'password' => \Hash::make('yoloyolo'),
                'type' => 'admin'
            )
        );


    }

}