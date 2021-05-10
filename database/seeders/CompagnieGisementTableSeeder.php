<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CompagnieGisementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('compagnie_gisements')->insert([ 
            [
                'noCompagnieGisement' => 1,
                'nomCompagnie' => 'Alcan',
            ],
            ]);
    }
}
