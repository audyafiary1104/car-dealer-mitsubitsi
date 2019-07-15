<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MasterProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_product', function (Blueprint $table) {
            $table->increments("id");
            $table->string("nama");
            $table->string("suplier");
            $table->string("type");
            $table->string("price_list");
            $table->date("tahun_perakitan");
            $table->integer("stock");
            $table->boolean("non_aktif")->default(false);
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
