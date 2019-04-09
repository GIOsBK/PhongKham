<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->string('password');
            $table->string('full_name');
            $table->string('name_slug');
            $table->string('phone_number');
            $table->integer('old');
            $table->string('avatar');
            $table->text('user_detail')->nullable();
            $table->tinyInteger('level');

            $table->integer('user_dipl')->unsigned();
            $table->foreign('user_dipl')
                  ->references('dipl_id')
                  ->on('tb_diplomaa')
                  ->onDelete('cascade');

            $table->integer('user_spec')->unsigned();
            $table->foreign('user_spec')
                  ->references('spec_id')
                  ->on('tb_specialist')
                  ->onDelete('cascade');
            $table->rememberToken();
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
        Schema::dropIfExists('tb_users');
    }
}
