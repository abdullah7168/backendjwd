<?php

use Illuminate\Database\Seeder;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert([
            'teacher_name' => 'Abdul Mateen',
            'cource_code' => 'CS-001',
            'email' => 'abdulmateen@fuuast.com',
            'password' => bcrypt('abdulmateen'),
        ]);
    }
}
