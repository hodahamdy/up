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
        Schema::create('partnership', function (Blueprint $table) {
            $table->id();
            $table->string('part_title');
            $table->string('part_desc');
            $table->string('part_duration');
            $table->string('part_percentage');
            $table->string('part_location');
            $table->string('part_rules');
            $table->string('part_cost');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partnership');
    }
};
