<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Spk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spk', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("id_smk");
            $table->string("kode_spk");
            $table->string("nama_cust");
            $table->string("alamat");
            $table->string("type_kendaraan");
            $table->string("pembayaran");
            $table->integer("ktp");
            $table->date("tanggal_pembuat");
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
