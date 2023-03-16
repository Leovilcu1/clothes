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
    public function up()
    {
        Schema::create('clothes', function (Blueprint $table) {
            $table->id();
            $table->string("marca",64);
            $table->string("img");
            $table->char("prezzo");
            $table->string("genere",16);
            $table->string("descrizione")->nullable();
            $table->boolean("consegna_rapida");
            $table->boolean("colezzione_nuova")->nullable();
            $table->string("tipo",64);
            $table->string("taglia",9);
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
        Schema::dropIfExists('clothes');
    }
};
