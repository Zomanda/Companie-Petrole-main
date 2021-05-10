<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarcheInternationalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$table->index(['nomCompagnie', 'noGisement']);
            $table->string('nomCompagnie')->index();
            $table->integer('noGisement')->index();
            $table->string('prixBaril')->index();
            $table->string('quantite')->index();*/
        DB::table('marche_internationals')->insert([ 
            [
                'nomCompagnie' => 'Alcan',
                'noGisement' => 1,
                'prixBaril' => 2,
                'quantite' => 200,
            ],
            ]);
    }
}
