<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramStudisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_studi', function (Blueprint $table) {
            $table->increments('id_ProgramStudi');
            $table->integer('id_Fakultas');
            $table->integer('id_Jurusan');
            $table->string('nama_ProgramStudi',150);
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
        Schema::drop('program_studi');
    }
}
