<?php

use Illuminate\Database\Seeder;

class MintypeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mintypes')->insert([
            [
                'name' => 'tipo1',
            ],
            [
                'name' => 'tipo2',
            ],
            [
                'name' => 'tipo3',
            ],
            [
                'name' => 'tipo4',
            ],
            [
                'name' => 'tipo5',
            ],
            [
                'name' => 'tipo6',
            ]]);
    }
}
