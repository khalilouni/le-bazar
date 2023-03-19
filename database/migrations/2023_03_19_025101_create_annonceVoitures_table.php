<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('annonce_voitures', function (Blueprint $table) {
            $table->id();
            $table->integer('kilometrage');
            $table->string('couleur');
            $table->enum('transmission', ['Automatique', 'Manuelle']);
            $table->integer('puissance_moteur');
            $table->integer('cylindre');
            $table->integer('annee_construction');

            
            $table->bigInteger('modeleId')->unsigned();
            $table->foreign('modeleId')->references('id')->on('modeles');
            $table->bigInteger('carrosserieId')->unsigned();
            $table->foreign('carrosserieId')->references('id')->on('carrosseries');
            $table->bigInteger('annonceId')->unsigned();
            $table->foreign('annonceId')->references('id')->on('annonces');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('annonce_voitures');
    }
};
