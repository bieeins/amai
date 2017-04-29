<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeriodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periode', function (Blueprint $table) {
            $table->increments('id_Periode');
            $table->string('nama_Periode');
            $table->string('awal_Periode',15);
            $table->string('akhir_Periode',15);
            $table->string('status_Periode',10)->default('tutup');
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
        Schema::drop('periode');
    }
}
