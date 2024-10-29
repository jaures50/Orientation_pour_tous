<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Titre de l'annonce
            $table->string('image'); // URL ou chemin de l'image
            $table->string('link')->nullable(); // Lien de redirection, nullable
            $table->timestamps(); // Création des champs created_at et updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ads'); // Suppression de la table ads
    }
};
