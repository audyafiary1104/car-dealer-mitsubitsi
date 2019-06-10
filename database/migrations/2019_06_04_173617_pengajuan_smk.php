<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PengajuanSmk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_smk', function (Blueprint $table) {
            $table->increments("id");
            $table->string("nama_cust");
            $table->string("nama_sales");

            $table->string("nama_stnk");
            $table->string("warna");
            $table->string("merk");
            $table->string("alamat");
            $table->string("type");
            $table->string("tahun");
            $table->string("nilai_versekot");
            $table->string("payment");
            $table->date("tanggal_pemesan");
            $table->string("tanggal_input");

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
