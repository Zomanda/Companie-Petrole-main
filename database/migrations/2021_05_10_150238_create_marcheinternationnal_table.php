<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarcheinternationnalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marche_internationals', function (Blueprint $table) {
            $table->primary(['nomCompagnie', 'noGisement']);
            $table->string('nomCompagnie')->index();
            $table->integer('noGisement')->index();
            $table->string('prixBaril')->index();
            $table->string('quantite')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marche_internationals');
    }
}
