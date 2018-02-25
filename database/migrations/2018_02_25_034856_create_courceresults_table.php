<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourceresultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courceresults', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cource_id');
            $table->string('teacher_id');
            $table->string('student_id');
            $table->string('total_marks');
            $table->string('obt_marks');
            $table->string('gpa');
            $table->string('grade');
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
