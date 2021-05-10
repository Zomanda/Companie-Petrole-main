<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGisementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gisements', function (Blueprint $table) {
            $table->id('noGisement');
            $table->integer('noCompagnieGisement')->nullable()->index();
            $table->string('pays')->index();
            $table->string('capaciteEstimee')->index();
            $table->string('capaciteConfirmee')->index();
            $table->string('composition')->index();
            $table->string('image')->default("");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gisements');
    }
}
