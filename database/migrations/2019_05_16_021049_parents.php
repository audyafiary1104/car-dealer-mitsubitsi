<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Parents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('number_of_children');
            $table->string('name_father');
            $table->string('name_mother');
            $table->string('job_father');
            $table->string('job_mother');
            $table->integer('religion_father');
            $table->integer('religion_mother');
            $table->string('last_education_father');
            $table->string('last_education_mother');
            $table->string('username');
            $table->string('password');

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
