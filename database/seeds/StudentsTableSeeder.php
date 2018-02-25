<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'name' => 'Jawad Kaisrani',
            'fathername' => 'Kaisrani',
            'gender' => 'male',
            'age' => '24',
            'dob' => '10/11/1993',
            'cnic' => '6110155771901',
            'address' => 'Street 25, Harley Street Rawalpindi',
            'email' => 'Jawadkaisrani@gmail.com',
            'username' => 'jawad',
            'password' => bcrypt('jawad'),
            'dpt_abbr' => 'CS',
            'shift' => '1',
        ]);
    }
}
