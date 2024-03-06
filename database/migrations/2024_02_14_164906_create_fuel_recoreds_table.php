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
        Schema::create('fuel_recoreds', function (Blueprint $table) {
            $table->id();
            $table->string('liter');
            $table->string('total_price');
            $table->string('price');
            $table->string('buyer');
            $table->string('date');
            $table->string('fuel');
            $table->string('status');
            $table->string('advance')->nullable();
            $table->string('remaning');
            $table->string('due_date');
            $table->string('method');
            $table->text('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fuel_recoreds');
    }
};
