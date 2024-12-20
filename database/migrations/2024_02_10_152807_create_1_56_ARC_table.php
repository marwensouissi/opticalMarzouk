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
        Schema::create('1_56_arc', function (Blueprint $table) {
            $table->id();
            $table->string('sphere');
            $table->integer('cylindre0');
            $table->integer('cylindre-0_25_to-2_00');
            $table->integer('cylindre-2_25_to-3_00');
            $table->integer('cylindre-3_25_to-4_00');
            $table->integer('cylindre-4_25_to-6_00')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('1_56');
    }
};
