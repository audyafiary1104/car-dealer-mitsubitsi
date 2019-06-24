<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PenerimaanVersekot extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penerimaan_versekot', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("id_cust");
            $table->integer("id_smk");
            $table->integer("nilai_versekot");
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