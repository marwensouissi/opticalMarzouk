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
        Schema::create('1_67__a_l_b', function (Blueprint $table) {
            $table->id();
            $table->string('sphere');
            $table->integer('cylindre0');
            $table->integer('cylindre-0_25_to-2_00');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('1_67__a_l_b');
    }
};
