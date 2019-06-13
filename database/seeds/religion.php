<?php

use Illuminate\Database\Seeder;

class religion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('religion')->insert([
            [
                'name' => 'islam',
            ],
            [
                'name' => 'kristen',
            ],
            [
                'name' => 'Khongkucu',
            ],
            [
                'name' => 'budha',
            ],
            [
                'name' => 'hindu',
            ],
        ]);
    }
}
