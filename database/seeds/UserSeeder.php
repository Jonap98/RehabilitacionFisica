<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(['id' => 1, 'name' => 'Jonathan', 'paterno' => 'Perez', 'materno' => 'lopez', 'user' => 'JonaP9.8', 'rol' => 1, 'email' => 'jona_jko@hotmail.com', 'password' => bcrypt('12345678')]);
        DB::table('users')->insert(['id' => 2, 'name' => 'Francisco', 'paterno' => 'Miranda', 'materno' => 'R', 'user' => 'Rhever', 'rol' => 1, 'email' => 'rever@hotmail.com', 'password' => bcrypt('12345678')]);
        DB::table('users')->insert(['id' => 3, 'name' => 'Eduardo', 'paterno' => 'Fernandez', 'materno' => 'Chavez', 'user' => 'IngChavez', 'rol' => 1, 'email' => 'chavez@hotmail.com', 'password' => bcrypt('12345678')]);
    }
}
