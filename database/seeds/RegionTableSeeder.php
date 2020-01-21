<?php

use Illuminate\Database\Seeder;

class RegionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Region::insert([
            'name_region' => 'Abruzzo',
            'user_id' => 1
        ]);

        App\Region::insert([
            'name_region' => 'Basilicata',
            'user_id' => 2
        ]);

        App\Region::insert([
            'name_region' => 'Calabria',
            'user_id' => 1
        ]);

        App\Region::insert([
            'name_region' => 'Campania',
            'user_id' => 2
        ]);

        App\Region::insert([
            'name_region' => 'Emilia_Romagna',
            'user_id' => 1
        ]);

        App\Region::insert([
            'name_region' => 'Friuli_Venezia_Giulia',
            'user_id' => 2
        ]);

        App\Region::insert([
            'name_region' => 'Lazio',
            'user_id' => 1
        ]);

        App\Region::insert([
            'name_region' => 'Liguria',
            'user_id' => 2
        ]);

        App\Region::insert([
            'name_region' => 'Lombardia',
            'user_id' => 1
        ]);

        App\Region::insert([
            'name_region' => 'Marche',
            'user_id' => 2
        ]);

        App\Region::insert([
            'name_region' => 'Molise',
            'user_id' => 1
        ]);

        App\Region::insert([
            'name_region' => 'Piemonte',
            'user_id' => 2
        ]);

        App\Region::insert([
            'name_region' => 'Puglia',
            'user_id' => 1
        ]);

        App\Region::insert([
            'name_region' => 'Sardegna',
            'user_id' => 2
        ]);

        App\Region::insert([
            'name_region' => 'Sicilia',
            'user_id' => 1
        ]);

        App\Region::insert([
            'name_region' => 'Toscana',
            'user_id' => 2
        ]);

        App\Region::insert([
            'name_region' => 'Trentino_Alto_Adige',
            'user_id' => 1
        ]);

        App\Region::insert([
            'name_region' => 'Umbria',
            'user_id' => 2
        ]);

        App\Region::insert([
            'name_region' => 'Valle_DAosta',
            'user_id' => 1
        ]);

        App\Region::insert([
            'name_region' => 'Veneto',
            'user_id' => 2
        ]);
    }
}
