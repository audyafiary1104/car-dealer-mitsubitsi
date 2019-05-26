<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MasterKaryawan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_karyawan', function (Blueprint $table) {
            $table->increments("id");
            $table->string("nik", 50)->unique();
            $table->string("alamat");
            $table->string("nama");
            $table->string("cabang");
            $table->string("jabatan");

            $table->string("nama_atasan");
            $table->string("departement");
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
