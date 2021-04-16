<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Student extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'students';  
    
    // public static function getStudents() {
    //     $records = DB::table('students')->select("id",
    //     "student_id",
    //     "student_fullname",
    //     "student_dob",
    //     "student_grade",
    //     "student_class",
    //     "student_gender",
    //     "student_address",
    //     "student_nation",
    //     "student_phone",
    //     "head_teacher",
    //     "parent_name",
    //     "parent_dob",
    //     "parent_gender",
    //     "parent_job",
    //     "parent_nation",
    //     "parent_phone",
    //     "parent_email");
    //     return $records;
    // }
}
