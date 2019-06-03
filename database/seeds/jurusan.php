<?php

use Illuminate\Database\Seeder;

class jurusan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('new_academic_year')->insert([
        'years' => '2016/2017',
       ]);
    }
}
