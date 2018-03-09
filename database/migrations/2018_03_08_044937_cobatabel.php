<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cobatabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikels', function (Blueprint $table) {
            //
            $table->increments('id'); //buat bikin auto increment di kolom id
            $table->string('judul'); //untuk bikin kolom dengan nama judul
            $table->string('konten');
            $table->timestamps();//di tabel yang dibuat akan langsung bikin 2 kolom tambahan yaitu create_add akan mencatat waktu data masuk
            //dan update_add untuk mencatat perubahan waktu data yang masuk
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('artikels');

    }
}
