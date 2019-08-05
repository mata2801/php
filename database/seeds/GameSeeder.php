<?php

use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('games')->truncate();
        DB::table('games')->insert([

        [
            'id' => 1,
            'name' => 'Counter Strike 7.0',
            'price' => 0,
            'created at' => date('Y-m-d H:i:s'),
            'updated at' => date('Y-m-d H:i:s')
        ],
        [
            'id' => 2,
            'name' => 'GTA',
            'price' => 2000,
            'created at' => date('Y-m-d H:i:s'),
            'updated at' => date('Y-m-d H:i:s'),
            ]]);


    }
}
