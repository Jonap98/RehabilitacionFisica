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
        DB::table('users')->insert(['id' => 4, 'name' => 'Gabriela', 'paterno' => 'Macias', 'materno' => 'Ramirez', 'user' => 'Gabs', 'rol' => 2, 'email' => 'gabs@gmail.com', 'password' => bcrypt('12345678')]);
        DB::table('users')->insert(['id' => 5, 'name' => 'Carlos', 'paterno' => 'Ortiz', 'materno' => 'Gomez', 'user' => 'Carlitos', 'rol' => 2, 'email' => 'carlos@gmail.com', 'password' => bcrypt('12345678')]);
        DB::table('users')->insert(['id' => 6, 'name' => 'Javier', 'paterno' => 'Loera', 'materno' => 'De la cruz', 'user' => 'Javi', 'rol' => 2, 'email' => 'javi@gmail.com', 'password' => bcrypt('12345678')]);
        DB::table('users')->insert(['id' => 7, 'name' => 'Isaac', 'paterno' => 'Garcia', 'materno' => 'Zarate', 'user' => 'ElIsaax', 'rol' => 2, 'email' => 'isaac@gmail.com', 'password' => bcrypt('12345678')]);
        DB::table('users')->insert(['id' => 8, 'name' => 'Francisco', 'paterno' => 'Torres', 'materno' => 'Delgado', 'user' => 'Pancho', 'rol' => 2, 'email' => 'pancho@gmail.com', 'password' => bcrypt('12345678')]);
        DB::table('users')->insert(['id' => 9, 'name' => 'Milka', 'paterno' => 'Salazar', 'materno' => 'Castro', 'user' => 'Milka', 'rol' => 2, 'email' => 'milka@gmail.com', 'password' => bcrypt('12345678')]);
    }
}
