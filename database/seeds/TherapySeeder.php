<?php

use Illuminate\Database\Seeder;

class TherapySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('therapy')->insert(['id' => 1, 'name' => 'Hombro', 'image' => '/storage/images/hombro.jpg', 'active' => 1]);
        DB::table('therapy')->insert(['id' => 2, 'name' => 'Brazo', 'image' => '/storage/images/brazo.jpg', 'active' => 1]);
        DB::table('therapy')->insert(['id' => 3, 'name' => 'Cuello', 'image' => '/storage/images/codo.jpg', 'active' => 1]);
        DB::table('therapy')->insert(['id' => 4, 'name' => 'Muñeca', 'image' => '/storage/images/muñeca.jpg', 'active' => 1]);
    }
}
