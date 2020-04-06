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
            'code' => 04,
        ]);

        App\Region::insert([
            'name_region' => 'Basilicata',
            'code' => 07,
        ]);

        App\Region::insert([
            'name_region' => 'Calabria',
            'code' => 01,
        ]);

        App\Region::insert([
            'name_region' => 'Campania',
            'code' => 06,
        ]);

        App\Region::insert([
            'name_region' => 'Emilia_Romagna',
            'code' => 01,
        ]);

        App\Region::insert([
            'name_region' => 'Friuli_Venezia_Giulia',
            'code' => 03,
        ]);

        App\Region::insert([
            'name_region' => 'Lazio',
            'code' => 01,
        ]);

        App\Region::insert([
            'name_region' => 'Liguria',
            'code' => 02,
        ]);

        App\Region::insert([
            'name_region' => 'Lombardia',
            'code' => 01,
        ]);

        App\Region::insert([
            'name_region' => 'Marche',
            'code' => 01,
        ]);

        App\Region::insert([
            'name_region' => 'Molise',
            'code' => 04,
        ]);

        App\Region::insert([
            'name_region' => 'Piemonte',
            'code' => 02,
        ]);

        App\Region::insert([
            'name_region' => 'Puglia',
            'code' => 07,
        ]);

        App\Region::insert([
            'name_region' => 'Sardegna',
            'code' => 01,
        ]);

        App\Region::insert([
            'name_region' => 'Sicilia',
            'code' => 05,
        ]);

        App\Region::insert([
            'name_region' => 'Toscana',
            'code' => 01,
        ]);

        App\Region::insert([
            'name_region' => 'Trentino_Alto_Adige',
            'code' => 03,
        ]);

        App\Region::insert([
            'name_region' => 'Umbria',
            'code' => 04,
        ]);

        App\Region::insert([
            'name_region' => 'Valle_DAosta',
            'code' => 02,
        ]);

        App\Region::insert([
            'name_region' => 'Veneto',
            'code' => 03,
        ]);
    }
}
