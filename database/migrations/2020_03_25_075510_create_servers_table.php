<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servers', function (Blueprint $table) {
            $table->id();
            $table->string('sn');
            $table->string('hostname');
            $table->integer('kp_id')->unsigned();
            $table->integer('merek_id')->unsigned();
            $table->timestamps();
            $table->foreign('kp_id')->references('id')->on('kps')
                  ->onDelete('cascade');
            $table->foreign('merek_id')->references('id')->on('mereks')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servers');
    }
}
