<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MasterCustommer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_custommer', function (Blueprint $table) {
            $table->increments("id");
            $table->string("nik", 50)->unique();
            $table->string("alamat");
            $table->string("tempat_lahir");
            $table->string("tanggal_lahir");
            $table->string("status");
            $table->string("pekerjaan");
            $table->string("industri");
            $table->string("provinsi");
            $table->string("kode_pos");
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
