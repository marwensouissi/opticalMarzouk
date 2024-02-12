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
       
            Schema::create('lunette_sols', function (Blueprint $table) {
                $table->id();
                $table->string('reference');
                $table->string('marque');
                $table->decimal('prix', 8, 2);
                $table->string('genre');
                $table->string('type_monture');
                $table->string('matiere_monture');
                $table->string('couleur');
                $table->integer('etat');
                $table->string('cover')->nullable();
                $table->string('couleur_verre');
                $table->integer('verre_polarise');
                $table->integer('verre_degrade');
                $table->integer('verre_miroirs');
                $table->text('image')->nullable();
                $table->integer('adaptable');
                $table->timestamps();
            });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lunette_solaires');
    }
};
