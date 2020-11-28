<?php

use Illuminate\Database\Seeder;

class ExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exercise')->insert(['id' => 1, 'name' => 'Estiramiento de hombro', 'path' => '/storage/videos/d.mkv', 'id_therapy' => 1, 'active' => 1]);
        DB::table('exercise')->insert(['id' => 2, 'name' => 'Flexión de hombro', 'path' => '/storage/videos/d.mkv', 'id_therapy' => 1, 'active' => 1]);
        DB::table('exercise')->insert(['id' => 3, 'name' => 'Fuerza con hombro', 'path' => '/storage/videos/d.mkv', 'id_therapy' => 1, 'active' => 1]);

        DB::table('exercise')->insert(['id' => 4, 'name' => 'Estiramiento de brazo', 'path' => '/storage/videos/d.mkv', 'id_therapy' => 2, 'active' => 1]);
        DB::table('exercise')->insert(['id' => 5, 'name' => 'Flexión de brazo', 'path' => '/storage/videos/d.mkv', 'id_therapy' => 2, 'active' => 1]);
        DB::table('exercise')->insert(['id' => 6, 'name' => 'Fuerza con brazo', 'path' => '/storage/videos/d.mkv', 'id_therapy' => 2, 'active' => 1]);

        DB::table('exercise')->insert(['id' => 7, 'name' => 'Flexión de cuello', 'path' => '/storage/videos/d.mkv', 'id_therapy' => 3, 'active' => 1]);
        DB::table('exercise')->insert(['id' => 8, 'name' => 'Rotación de cuello', 'path' => '/storage/videos/d.mkv', 'id_therapy' => 3, 'active' => 1]);


        DB::table('exercise')->insert(['id' => 9, 'name' => 'Fuerza con muñeca', 'path' => '/storage/videos/d.mkv', 'id_therapy' => 4, 'active' => 1]);
        DB::table('exercise')->insert(['id' => 10, 'name' => 'Pronación', 'path' => '/storage/videos/d.mkv', 'id_therapy' => 4, 'active' => 1]);
        DB::table('exercise')->insert(['id' => 11, 'name' => 'Supinación', 'path' => '/storage/videos/d.mkv', 'id_therapy' => 4, 'active' => 1]);
    }
}
