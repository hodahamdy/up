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
        Schema::create('funding_agencies', function (Blueprint $table) {
            $table->id();
            $table->string('fund_name');
            $table->string('fund_desc');
            $table->string('fund_rules');
            $table->string('fund_logo');
            $table->string('fund_cost_from');
            $table->string('fund_cost_to');
            $table->string('fund_interset_percentage');
            $table->string('fund_repay_period');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('funding_agencies');
    }
};
