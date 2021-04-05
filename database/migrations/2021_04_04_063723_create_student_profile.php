<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_profile', function (Blueprint $table) {
            // Student Table
            $table->bigIncrements('id');
            $table->string('student_id')->unique();
            $table->string('student_fullname');
            $table->date('student_dob');
            $table->integer('student_grade');
            $table->string('student_class');            
            $table->string('student_gender');
            $table->string('student_address');
            $table->string('student_nation');
            $table->string('student_phone');
            $table->string('student_img');

            // Parent Table
            $table->string('parent_name');
            $table->date('parent_dob');
            $table->string('parent_gender');
            $table->string('parent_job');
            $table->string('parent_nation');
            $table->string('parent_phone');
            $table->string('parent_email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_profile');
    }
}
