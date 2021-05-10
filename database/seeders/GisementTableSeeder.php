<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GisementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gisements')->insert([ 
            [
                'noGisement' => 1,
                'noCompagnieGisement' => 1,
                'pays' => 'Norvege',
                'capaciteEstimee' => 100,
                'capaciteConfirmee' => 20,
                'composition' => 'Nickel, Bauxite, Carbone',
            ],
            [
                'noGisement' => 2,
                'noCompagnieGisement' => 1,
                'pays' => 'Grande Bretagne',
                'capaciteEstimee' => 2000,
                'capaciteConfirmee' => 1000,
                'composition' => 'Or, Platine',
            ],
            ]);
    }
}
