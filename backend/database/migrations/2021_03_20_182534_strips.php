<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Strips extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('strips', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('task_id')->unsigned();
            $table->string('strip_name');
            $table->integer('spent_minute');
            $table->bigInteger('step_id');
            $table->bigInteger('parent_strip_id'); // タスク直下のstripはparent_strip_idを持たない
            $table->unsignedTinyInteger('is_done');
            $table->integer('color_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
