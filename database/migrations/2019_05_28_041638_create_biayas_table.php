<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiayasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_biaya', function (Blueprint $table) {
            $table->increments("id");
            $table->string("kode_gl", 50)->unique();
            $table->string("nama_gl");
            $table->string("type_gl");
            $table->string("level_gl");
            $table->string("group_gl");
            $table->string("linnk_gl");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('biayas');
    }
}
