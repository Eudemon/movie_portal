<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            array('title' => 'The Meg', 'format' => 'DVD', 'length' => 133, 'year' => 2018, 'rating' => 3, 'img' => 'MV5BMjg0MzA4MDE0N15BMl5BanBnXkFtZTgwMzk3MzAwNjM@._V1_.jpg'),
            array('title' => 'The Crown', 'format' => 'Streaming', 'length' => 58, 'year' => 2016, 'rating' => 4, 'img' => 'MV5BMjAxOTA2Mjc3MF5BMl5BanBnXkFtZTgwMTMxMzIxNDM@._V1_SY1000_CR0,0,674,1000_AL_.jpg'),
            array('title' => 'A Prayer Before Dawn', 'format' => 'DVD', 'length' => 136, 'year' => 2017, 'rating' => 3, 'img' => 'MV5BMzU5NzhlOGYtODE0YS00ZmUxLWI2YzctNTM0ZWNjMmJjMjBkXkEyXkFqcGdeQXVyNTAzMTY4MDA@._V1_SY1000_SX675_AL_.jpg'),
            array('title' => 'The Lord of the Rings', 'format' => 'VHS', 'length' => 178, 'year' => 2001, 'rating' => 5, 'img' => 'MV5BN2EyZjM3NzUtNWUzMi00MTgxLWI0NTctMzY4M2VlOTdjZWRiXkEyXkFqcGdeQXVyNDUzOTQ5MjY@._V1_SY999_CR0,0,673,999_AL_.jpg'),
            array('title' => 'Super 8', 'format' => 'DVD', 'length' => 132, 'year' => 2011, 'rating' => 4, 'img' => 'MV5BMjIzNjEyMzcwOF5BMl5BanBnXkFtZTcwMTkyMjE0NQ@@._V1_SY1000_CR0,0,674,1000_AL_.jpg'),
        );

        DB::table('movie')->insert($data);
    }
}
