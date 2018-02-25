<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     * 
     * @return void
     */

     
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cource_codes');
            $table->string('student_id');
            $table->string('pass_marks');
            $table->string('obt_marks');
            $table->string('cgpa');
            $table->string('section');
            $table->string('semester');
            $table->string('type'); // regular or supply
            $table->string('shift');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
