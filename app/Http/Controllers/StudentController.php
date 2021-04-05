<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('student', ['students'=>$students, 'layout'=>'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = Student::all();
        return view('student', ['students'=>$students, 'layout'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|unique:students',
            'grade' => 'required',
            'class' => 'required',
            'fullname' => 'required',
            'head_teacher' => 'required',
        ], [
            'student_id.required' => 'Vui lòng nhập mã học sinh',
            'grade.required' => 'Vui lòng nhập khối',
            'class.required' => 'Vui lòng nhập lớp',
            'fullname.required' => 'Vui lòng nhập họ và tên',
            'head_teacher.required' => 'Vui lòng nhập tên giáo viên chủ nhiệm'
            ]);      
        $student = new Student();        
        $student->student_id = $request->input('student_id');
        $student->grade = $request->input('grade');
        $student->class = $request->input('class');
        $student->fullname = $request->input('fullname');
        $student->head_teacher = $request->input('head_teacher');
        $student->save();
          
        return redirect('/');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        $students = Student::all();
        return view('student',['students'=>$students, 'student'=>$student, 'layout'=>'show']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        $students = Student::all();
        return view('student',['students'=>$students, 'student'=>$student, 'layout'=>'edit']);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->student_id = $request->input('student_id');
        $student->grade = $request->input('grade');
        $student->class = $request->input('class');
        $student->fullname = $request->input('fullname');
        $student->head_teacher = $request->input('head_teacher');
        $student->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete("delete from students where id = ?", [$id]);
        return redirect('/')->with('success', 'Dữ liệu được xóa thành công!');
    }   
    
    public function search(Request $request) {
        $student = Student::query();

        if ($search = $request->query('search_box')) {
            $student->where('class', 'like', "%$search%")
            ->orwhere('grade', 'like', "%$search%");
        }
        return view('student', ['students' => $student->get(), 'layout'=>'search']);
    }

    public function profile($id)
    {              
        $student = Student::findOrFail($id);
        return view('student_profile', compact('student'));
    }

    public function edit_profile($id) 
    {
        
        $student = Student::findOrFail($id);
        return view('edit_student_profile', ['students' => $student->get()]);
    }
 
}
