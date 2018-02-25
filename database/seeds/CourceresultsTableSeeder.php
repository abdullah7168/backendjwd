<?php

use Illuminate\Database\Seeder;

class CourceresultsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courceresults')->insert([
            'cource_id' => 'CS-002',
            'teacher_id' => '1',
            'student_id' => '1',
            'total_marks' => '100',
            'obt_marks' => '80',
            'gpa' => '4',
            'grade' => 'A'
        ]);
    }
}
