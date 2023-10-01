<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class DropPreviousActionsTable extends Migration
{
    public function up()
    {
        Schema::dropIfExists('previous_actions');
    }

    public function down()
    {
        // rollback 時の処理を記述（今回は何もしない）
    }
}
