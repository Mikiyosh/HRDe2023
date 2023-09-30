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
        Schema::create('pres', function (Blueprint $table) {
            $table->id();
            $table->string('action1');
            $table->string('action2');
            $table->string('action3');
            $table->string('action4');
            $table->string('action5');
            $table->string('action6');
            $table->string('action7');
            $table->string('action8');
            $table->string('action9');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pres');
    }
};
