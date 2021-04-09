<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

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
        // dd($students);
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
        // $request->validate([
        //     'student_id' => 'required|unique:students',
        //     'student_grade' => 'required',
        //     'student_class' => 'required',
        //     'student_fullname' => 'required',
        //     'head_teacher' => 'required',
        // ], [
        //     'student_id.required' => 'Vui lòng nhập mã học sinh',
        //     'student_grade.required' => 'Vui lòng nhập khối',
        //     'student_class.required' => 'Vui lòng nhập lớp',
        //     'student_fullname.required' => 'Vui lòng nhập họ và tên',
        //     'head_teacher.required' => 'Vui lòng nhập tên giáo viên chủ nhiệm'
        //     ]);      
        $student = new Student();        
        $student->student_id = $request->input('student_id');
        $student->student_fullname= $request->input('student_fullname');
        $student->student_dob = $request->input('student_dob');
        $student->student_grade = $request->input('student_grade');
        $student->student_class = $request->input('student_class');
        $student->student_gender = $request->input('student_gender');
        $student->student_address = $request->input('student_address');
        $student->student_nation = $request->input('student_nation');
        $student->student_phone = $request->input('student_phone');
        $student->head_teacher = $request->input('head_teacher');
        // $student->student_img = $request->input('student_img');

        $student->parent_name = $request->input('parent_name');
        $student->parent_dob = $request->input('parent_dob');
        $student->parent_gender = $request->input('parent_gender');
        $student->parent_job = $request->input('parent_job');
        $student->parent_nation = $request->input('parent_nation');
        $student->parent_phone= $request->input('parent_phone');
        $student->parent_email= $request->input('parent_email');
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
        $student->student_fullname= $request->input('student_fullname');
        $student->student_dob = $request->input('student_dob');
        $student->student_grade = $request->input('student_grade');
        $student->student_class = $request->input('student_class');
        $student->student_gender = $request->input('student_gender');
        $student->student_address = $request->input('student_address');
        $student->student_nation = $request->input('student_nation');
        $student->student_phone = $request->input('student_phone');
        $student->head_teacher = $request->input('head_teacher');
        // $student->student_img = $request->input('student_img');

        $student->parent_name = $request->input('parent_name');
        $student->parent_dob = $request->input('parent_dob');
        $student->parent_gender = $request->input('parent_gender');
        $student->parent_job = $request->input('parent_job');
        $student->parent_nation = $request->input('parent_nation');
        $student->parent_phone= $request->input('parent_phone');
        $student->parent_email= $request->input('parent_email');
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
            $student->where('student_class', 'like', "%$search%")
            ->orwhere('student_grade', 'like', "%$search%");
        }
        return view('student', ['students' => $student->get(), 'layout'=>'search']);
    }

    public function profile($id)
    {              
        $student = Student::findOrFail($id);
        return view('student_profile', compact('student'));
    }

    public function edit_profile($id)     {
        
        $student = Student::findOrFail($id);
        return view('edit_student_profile', compact('student'));
    }

}
