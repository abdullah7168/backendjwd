<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnrollmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cource_codes');
            $table->string('student_id');
            $table->string('dpt_abbr');
            $table->string('degree');
            $table->string('fee');
            $table->string('fee_status');
            $table->string('semester');
            $table->string('type'); // regular or supply
            $table->string('section');
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
