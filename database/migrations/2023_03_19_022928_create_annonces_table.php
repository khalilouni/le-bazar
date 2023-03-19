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
        Schema::create('annonces', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('description');
            $table->boolean('type');
            $table->double('prix', 15, 8);
            $table->string('ville');
            $table->string('delegation');
            $table->bigInteger('privilegeId')->unsigned()->default('3');
            $table->foreign('privilegeId')->references('id')->on('privileges');
            $table->bigInteger('categorieId')->unsigned();
            $table->foreign('categorieId')->references('id')->on('categories');
            $table->bigInteger('sousCategorieId')->unsigned();
            $table->foreign('sousCategorieId')->references('id')->on('sousCategories');
            $table->bigInteger('boutiqueId')->unsigned();
            $table->foreign('boutiqueId')->references('id')->on('boutiques');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('annonces');
    }
};
