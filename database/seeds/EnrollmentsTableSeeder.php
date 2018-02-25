<?php

use Illuminate\Database\Seeder;

class EnrollmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('enrollments')->insert([
            'cource_codes' => serialize(array('CS-001','CS-002')),
            'student_id' => '1',
            'dpt_abbr' => 'CS',
            'degree' => 'BS',
            'fee' => '26000',
            'fee_status' => 'pending',
            'semester' => '8',
            'type' => 'regular',
            'section' => 'A',
            'shift' => '1'
        ]);
    }
}
