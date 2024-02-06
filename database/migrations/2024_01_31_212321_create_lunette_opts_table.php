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
        Schema::create('lunette_opts', function (Blueprint $table) {
            $table->id();
            $table->string('reference');
            $table->string('marque');
            $table->decimal('prix');
            $table->string('type_monture');
            $table->string('matiere_monture');
            $table->string('couleur');
            $table->string('image');
            $table->string('cover');
            $table->integer('etat');
            $table->integer('apl');

            // Add any other columns you need
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('lunette_opts', function (Blueprint $table) {
        });
    }
};
