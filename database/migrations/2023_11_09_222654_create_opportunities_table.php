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
        Schema::create('opportunities', function (Blueprint $table) {


 $table->id();
 $table->string('opp_name');
 $table->text('opp_desc');
 $table->integer('opp_contract_duration');
 $table->text('opp_rules');
 $table->text('opp_copyrights_percentage');
 $table->text('opp_markting_percentage');
 $table->integer('opp_cost_from');
 $table->integer('opp_cost_to');
 $table->string('opp_image');
 $table->string('opp_location');
 $table->string('category_id');
 $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('opportunities');
    }
};
