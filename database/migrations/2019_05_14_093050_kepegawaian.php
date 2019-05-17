<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Kepegawaian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kepegawaian', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('role_id');
            $table->integer('nip')->nullable();
            $table->string('name');
            $table->date('birth_date');
            $table->string('address');
            $table->integer('phone');
            $table->string('image');
            $table->string('gender');
            $table->integer('religion');
            $table->string('position');
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
