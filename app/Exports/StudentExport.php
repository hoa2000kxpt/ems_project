<?php

namespace App\Exports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class StudentExport implements FromCollection, WithHeadings
{    
    public function headings():array {
        return [
            "id",
            "student_id",
            "student_fullname",
            "student_dob",
            "student_grade",
            "student_class",
            "student_gender",
            "student_address",
            "student_nation",
            "student_phone",
            "head_teacher",
            "parent_name",
            "parent_dob",
            "parent_gender",
            "parent_job",
            "parent_nation",
            "parent_phone",
            "parent_email"
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return collect(Student::getStudents());
        return Student::all();
    }
}
