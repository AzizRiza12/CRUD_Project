<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->bigIncrements('Siswa_id');
            $table->bigInteger('Kelas_id')->unsigned();
            $table->string('Nama');
            $table->bigInteger('No');
            $table->bigInteger('NIS');
            $table->timestamps();

            $table->foreign('Kelas_id')->references('Kelas_id')->on('kelas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswas');
    }
}
