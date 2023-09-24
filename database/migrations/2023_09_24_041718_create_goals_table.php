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
        Schema::create('goals', function (Blueprint $table) {
            $table->id();
            $table->string('leadership1');
            $table->string('leadership2');
            $table->string('leadership3');
            $table->string('communication1');
            $table->string('communication2');
            $table->string('communication3');
            $table->string('issue1');
            $table->string('issue2');
            $table->string('issue3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('goals');
    }
};