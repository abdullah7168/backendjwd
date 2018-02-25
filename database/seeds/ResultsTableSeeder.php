<?php

use Illuminate\Database\Seeder;

class ResultsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('results')->insert([
            'cource_codes' => serialize(array('CS-001','CS-002')),
            'student_id' => '1',
            'pass_marks' => '',
            'obt_marks' => '',
            'cgpa' => '2.28',
            'section' => 'A',
            'semester' => '1',
            'type' => 'regular',
            'shift' => '1',
        ]);
    }
}
