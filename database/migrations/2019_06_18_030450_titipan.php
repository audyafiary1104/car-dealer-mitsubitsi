<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Titipan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('titipan', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("id_cust");
            $table->string("nama_cust");
            $table->string("alamat");
            $table->integer("nilai_titip");
            $table->date("tanggal_pembuat");
        });    }

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
