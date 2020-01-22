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
        ]);

        App\Region::insert([
            'name_region' => 'Basilicata',
        ]);

        App\Region::insert([
            'name_region' => 'Calabria',
        ]);

        App\Region::insert([
            'name_region' => 'Campania',
        ]);

        App\Region::insert([
            'name_region' => 'Emilia_Romagna',
        ]);

        App\Region::insert([
            'name_region' => 'Friuli_Venezia_Giulia',
        ]);

        App\Region::insert([
            'name_region' => 'Lazio',
        ]);

        App\Region::insert([
            'name_region' => 'Liguria',
        ]);

        App\Region::insert([
            'name_region' => 'Lombardia',
        ]);

        App\Region::insert([
            'name_region' => 'Marche',
        ]);

        App\Region::insert([
            'name_region' => 'Molise',
        ]);

        App\Region::insert([
            'name_region' => 'Piemonte',
        ]);

        App\Region::insert([
            'name_region' => 'Puglia',
        ]);

        App\Region::insert([
            'name_region' => 'Sardegna',
        ]);

        App\Region::insert([
            'name_region' => 'Sicilia',
        ]);

        App\Region::insert([
            'name_region' => 'Toscana',
        ]);

        App\Region::insert([
            'name_region' => 'Trentino_Alto_Adige',
        ]);

        App\Region::insert([
            'name_region' => 'Umbria',
        ]);

        App\Region::insert([
            'name_region' => 'Valle_DAosta',
        ]);

        App\Region::insert([
            'name_region' => 'Veneto',
        ]);
    }
}
