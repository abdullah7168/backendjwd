<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            'dpt_title' => 'Computer Science',
            'dpt_abbr' => 'CS',
            'tution_fee' => '20000',
            'semesters' => '8',
        ]);
    }
}
