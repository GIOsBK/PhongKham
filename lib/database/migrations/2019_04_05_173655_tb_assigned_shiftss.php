<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbAssignedShiftss extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_assigned_shiftss', function (Blueprint $table) {
            $table->increments('assi_id');
            $table->string('assi_name');
            $table->string('assi_slug');
            $table->string('assi_timeStart');
            $table->string('assi_timeFinish');
            $table->float('assi_factor',8,2);
            $table->text('assi_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_assigned_shiftss');
    }
}
