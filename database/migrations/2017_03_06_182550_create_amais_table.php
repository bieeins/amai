<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amai', function (Blueprint $table) {
            $table->increments('id_Amai');
            $table->integer('id_Pertanyaan');
            $table->integer('id_Periode');
            $table->integer('id_UserInput');
            $table->integer('id_UserReview');
            $table->string('nilai');
            $table->date('date_Input');
            $table->date('date_Nilai');
            $table->string('jawaban');
            $table->string('ket_Reviewer');
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
        Schema::drop('amai');
    }
}
