<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     //Azienda
     //Stazione di partenza
     //Stazione di arrivo
     //Orario di partenza
     //Orario di arrivo
     //Codice Treno
     //Numero Carrozze
     //In orario
     //Cancellato

    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('name_azienda', 255);
            $table->string('name_station_p',255);
            $table->string('name_station_a',255);
            $table->string('orario_partenza',);
            $table->string('orario_arrivo',255);
            $table->string('codice_treno',255);
            $table->integer('num_carrozze');
            $table->boolean('treno_in_orario')->default(1);
            $table->boolean('cancellato')->default(0);




            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
