<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            // Student Table
            $table->bigIncrements('id');
            $table->integer('student_id')->unique();
            $table->string('student_fullname');
            $table->date('student_dob');
            $table->integer('student_grade');
            $table->string('student_class');            
            $table->string('student_gender');
            $table->string('student_address');
            $table->string('student_nation');
            $table->string('student_phone');
            $table->string('head_teacher');
            // $table->string('student_img');

            // Parent Table
            $table->string('parent_name')->nullable();
            $table->date('parent_dob')->nullable();
            $table->string('parent_gender')->nullable();
            $table->string('parent_job')->nullable();
            $table->string('parent_nation')->nullable();
            $table->string('parent_phone')->nullable();
            $table->string('parent_email')->nullable();
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student');
    }
}
