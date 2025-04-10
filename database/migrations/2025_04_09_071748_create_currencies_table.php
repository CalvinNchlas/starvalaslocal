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
        Schema::create('currencies', function (Blueprint $table) {
            $table->id();
            $table->string('flag')->nullable();
            $table->string('currency')->nullable();
            $table->string('name')->nullable();
            $table->string('denomination')->nullable();
            $table->decimal('buy_rate', 15, 4)->nullable();
            $table->decimal('sell_rate', 15, 4)->nullable();
            $table->decimal('mid_rate', 15, 4)->nullable();
            $table->decimal('max_addition', 15, 4)->nullable();
            $table->decimal('max_reduction', 15, 4)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('currencies');
    }
};
