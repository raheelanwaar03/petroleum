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
        Schema::create('buying_petrol_recoreds', function (Blueprint $table) {
            $table->id();
            $table->string('liter');
            $table->string('price');
            $table->string('total_price');
            $table->string('seller');
            $table->string('date');
            $table->string('fuel');
            $table->string('status');
            $table->string('note');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buying_petrol_recoreds');
    }
};
