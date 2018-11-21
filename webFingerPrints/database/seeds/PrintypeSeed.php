<?php

use Illuminate\Database\Seeder;

class PrintypeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('printypes')->insert([
        [
            'name' => 'pulgar',
        ],
        [
            'name' => 'indice',
        ],
        [
            'name' => 'medio',
        ],
        [
            'name' => 'anular',
        ],
        [
            'name' => 'menique',
        ],
        [
            'name' => 'palma',
        ]]);
    }
}
