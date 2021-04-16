<?php

namespace App\Http\Controllers;

use App\Exports\StudentExport;
use Illuminate\Http\Request;

use App\Models\Student;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class ImportExportController extends Controller
{   
    public function exportIntoExcel() {
        return Excel::download(new StudentExport, 'student.xlsx');
    }

    public function exportIntoCSV() {
        return Excel::download(new StudentExport, 'student.csv');
    }

    public function downloadPDF() {
        $students = Student::all();
        $pdf = PDF::loadView('student', ['students'=>$students, 'layout'=>'index']);
        return $pdf->download('student-list.pdf');
    }
}
