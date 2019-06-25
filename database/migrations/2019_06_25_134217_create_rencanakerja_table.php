<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRencanakerjaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rencanakerja', function (Blueprint $table) {
            $table->increments('id_rencana');
            $table->string('nama_rencana', 50);
            $table->date('tgl_a');
            $table->date('tgl_b');
            $table->text('keterangan');
            $table->enum('stat', ['1','2']);
            $table->integer('id_staff_it')->unsigned();

            $table->foreign('id_staff_it')->references('id_staff_it')->on('staffit');
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
        Schema::dropIfExists('rencanakerja');
    }
}
