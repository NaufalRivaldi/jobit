<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListkerjaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listkerja', function (Blueprint $table) {
            $table->increments('id_listkerja');
            $table->date('tgl');
            $table->string('nama_pekerjaan', 50);
            $table->string('dep', 25);
            $table->text('keterangan');
            $table->enum('stat', ['1', '2']);
            $table->integer('id_staff_it')->unsigned();
            $table->integer('id_kategori')->unsigned();

            $table->foreign('id_staff_it')->references('id_staff_it')->on('staffit');
            $table->foreign('id_kategori')->references('id_kategori')->on('kategori');
            
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
        Schema::dropIfExists('listkerja');
    }
}
