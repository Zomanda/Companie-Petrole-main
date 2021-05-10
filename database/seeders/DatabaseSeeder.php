<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(HistoriqueCompagnieTableSeeder::class);
        $this->call(CompagnieTableSeeder::class);
        $this->call(CompagnieGisementTableSeeder::class);
        $this->call(GisementTableSeeder::class);
    }
}
