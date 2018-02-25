<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CourcesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cources')->insert([
            'code' => 'CS-002',
            'name' => 'Calculus',
            'credit_hours' => '3',
            'fee' => '3000',
        ]);
    }
}
