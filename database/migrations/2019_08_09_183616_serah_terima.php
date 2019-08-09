<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SerahTerima extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serah_terima_brjs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_spk');
            $table->string('no_spk');
            $table->string('no_cust');
            $table->string('nama');
            $table->string('alamat');
            $table->string('type_kendaraan');
            $table->string('warna');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('serah_terima_brjs');
    }
}
