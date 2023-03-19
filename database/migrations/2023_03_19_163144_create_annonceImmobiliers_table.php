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
        Schema::create('immobiliers', function (Blueprint $table) {
            $table->id();
            $table->integer('superficie');
            $table->enum('type', ['Location', 'Vente']);
            $table->integer('nombreChambre');
            $table->integer('nombreSalleBain');
            $table->boolean('parking');
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
        Schema::dropIfExists('immobiliers');
    }
};
