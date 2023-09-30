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
    Schema::create('previous_actions', function (Blueprint $table) {
            $table->id();
            $table->string('preaction1');
            $table->string('preaction2');
            $table->string('preaction3');
            $table->string('preaction4');
            $table->string('preaction5');
            $table->string('preaction6');
            $table->string('preaction7');
            $table->string('preaction8');
            $table->string('preaction9');
            $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('previous_actions', function (Blueprint $table) {
            //
        });
    }
};
