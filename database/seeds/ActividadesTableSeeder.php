<?php

use Illuminate\Database\Seeder;

class ActividadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actividades')->insert([
            [
                'name' => 'Conferencia 1'
            ],
            [
                'name' => 'Conferencia 2'
            ],
            [
                'name' => 'Conferencia 3'
            ],
            [
                'name' => 'Actividad 1'
            ],
            [
                'name' => 'Actividad 2'
            ],
            [
                'name' => 'Actividad 3'
            ],
            [
                'name' => 'Actividad 1 (Repetición)'
            ],
            [
                'name' => 'Actividad 2 (repetición)'
            ],
            [
                'name' => 'Ponencia'
            ]

            
        ]);
    }
}

