<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConfimSmkSpv extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('confirm_smk_spv', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_smk');
            $table->string('nama_peminat');
            $table->string('alamat');
            $table->integer('id_sales');
            $table->integer('id_spv')->nullable();
            $table->string('payment');
            $table->string('nilai_versekot');
            $table->integer('lempar_ke_spv')->nullable();
            $table->boolean('confirm')->nullable();
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
        //
    }
}
