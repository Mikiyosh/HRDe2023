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
  Schema::table('actions', function (Blueprint $table) {
    // 🔽 1行追加
    $table->foreignId('user_id')->after('id')->nullable()->constrained()->cascadeOnDelete();
  });
}

public function down()
{
  Schema::table('actions', function (Blueprint $table) {
    // 🔽 2行追加
    $table->dropForeign(['user_id']);
    $table->dropColumn(['user_id']);
  });
}
};