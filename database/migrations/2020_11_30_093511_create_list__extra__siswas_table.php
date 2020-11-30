<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListExtraSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list__extra__siswas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('Siswa_id')->unsigned();
            $table->bigInteger('Extra_id')->unsigned();
            $table->timestamps();

            $table->foreign('Siswa_id')->references('Siswa_id')->on('siswas')->onDelete('cascade');
            $table->foreign('Extra_id')->references('Extra_id')->on('extras')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('list__extra__siswas');
    }
}
