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
        Schema::create('montres', function (Blueprint $table) {
            $table->id();
            $table->string('reference');
            $table->string('marque');
            $table->string('genre');
            $table->decimal('prix');
            $table->string('image');
            $table->string('cover');
            $table->integer('etat');
            $table->integer('solde')->nullable();


            // Add any other columns you need
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('montres');
    }
};
