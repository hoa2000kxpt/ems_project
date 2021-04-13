<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit student Profile</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        #stu_profile .card {
            padding: 2em;
            margin-bottom: 1em; 
        }
    </style>
</head>
<body>



<section id="stu_profile">
    <div class="container">
        <div class="row">        
        <!-- <form action="{{ action('StudentController@store')}}" method="POST" style="width: 100%;display: flex;">  -->
            
            <div class="col-md-6"> 
                <div class="card">
                    <div class="card-body">
                        <h3>Thông tin học sinh</h3>
                    </div>
                    
                    <!-- <div class="form-group">
                        <label for="student_img">Ảnh giao diện</label>
                        <input type="file" class="form-control-file" name="student_img" id="student_img">
                    </div>   -->

                    <div class="form-group">
                        <label for="student_fullname">Họ và tên</label>
                        <input type="text" class="form-control" name="student_fullname" id="student_fullname" placeholder="Hãy điền họ và tên học sinh" value="{{ $student->student_fullname }}"/>
                        @if ($errors->has('student_fullname'))
                        <span class="text-danger">{{ $errors->first('student_fullname') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="student_id">Thẻ học sinh</label>
                        <input type="text" class="form-control" name="student_id" id="student_id" placeholder="Hãy điền thẻ học sinh" value="{{ $student->student_id }}"/>
                        @if ($errors->has('student_id'))
                        <span class="text-danger">{{ $errors->first('student_id') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="student_dob">Ngày sinh (Tháng/Ngày/Năm)</label>
                        <input type="date" class="form-control" name="student_dob" id="student_dob" value="{{ $student->student_dob }}"/>
                        @if ($errors->has('student_dob'))
                        <span class="text-danger">{{ $errors->first('student_dob') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="student_grade">Khối</label>
                            <select class="form-control" name="student_grade" id="student_grade">
                            <option selected="true" disabled="disabled">-- Hãy chọn khối --</option>
                                <option {{old('student_grade',$student->student_grade)=="1"? 'selected':''}}  value="1">1</option>
                                <option {{old('student_grade',$student->student_grade)=="2"? 'selected':''}}  value="2">2</option>
                                <option {{old('student_grade',$student->student_grade)=="3"? 'selected':''}}  value="3">3</option>
                                <option {{old('student_grade',$student->student_grade)=="4"? 'selected':''}}  value="4">4</option>
                                <option {{old('student_grade',$student->student_grade)=="5"? 'selected':''}}  value="5">5</option>                                
                            </select>
                            @if ($errors->has('student_grade'))
                            <span class="text-danger">{{ $errors->first('student_grade') }}</span>
                            @endif
                    </div>

                    <div class="form-group">
                        <label for="student_class">Lớp</label>
                        <input type="text" class="form-control" name="student_class" id="student_class" placeholder="Hãy điền lớp của học sinh" value="{{ $student->student_class }}"/>
                        @if ($errors->has('student_class'))
                        <span class="text-danger">{{ $errors->first('student_class') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="student_gender">Giới tính</label>
                            <select class="form-control" name="student_gender" id="student_gender">
                                <option selected="true" disabled="disabled">-- Hãy chọn giới tính --</option>
                                <!-- <input type="text" name="student_gender" id="student_gender"> -->
                                <option {{old('student_gender',$student->student_gender)=="Nam"? 'selected':''}}  value="Nam">Nam</option>
                                <option {{old('student_gender',$student->student_gender)=="Nữ"? 'selected':''}}  value="Nữ">Nữ</option>
                                <option {{old('student_gender',$student->student_gender)=="Không xác định"? 'selected':''}}  value="Không xác định">Không xác định</option>                                
                            </select>
                            @if ($errors->has('student_gender'))
                            <span class="text-danger">{{ $errors->first('student_gender') }}</span>
                            @endif
                    </div>

                    <div class="form-group">
                        <label for="student_address">Địa chỉ</label>
                        <input type="text" class="form-control" name="student_address" id="student_address" placeholder="Hãy điền địa chỉ của học sinh" value="{{ $student->student_address }}"/>
                        @if ($errors->has('student_address'))
                        <span class="text-danger">{{ $errors->first('student_address') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="student_nation">Dân tộc</label>
                        <input type="text" class="form-control" name="student_nation" id="student_nation" placeholder="Hãy điền dân tộc của học sinh" value="{{ $student->student_nation }}"/>
                        @if ($errors->has('student_nation'))
                        <span class="text-danger">{{ $errors->first('student_nation') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="student_phone">Số điện thoại</label>
                        <input type="text" class="form-control" name="student_phone" id="student_phone" placeholder="Hãy điền số điện thoại của học sinh" value="{{ $student->student_phone }}"/>
                        @if ($errors->has('student_phone'))
                        <span class="text-danger">{{ $errors->first('student_phone') }}</span>
                        @endif
                    </div>  

                    <div class="form-group">
                        <label for="head_teacher">Giáo viên chủ nhiệm </label>
                        <input type="text" class="form-control" name="head_teacher" id="head_teacher" placeholder="Hãy điền thông tin giáo viên chủ nhiệm" value="{{ $student->head_teacher }}"/>
                        @if ($errors->has('head_teacher'))
                        <span class="text-danger">{{ $errors->first('head_teacher') }}</span>
                        @endif
                    </div>    
                                
                </div>            
            </div>                

            <div class="col-md-6">            
                <div class="card">
                    <div class="card-body">
                        <h3>Thông tin phụ huynh</h3>
                    </div>

                    <div class="form-group">
                        <label for="parent_name">Họ và tên</label>
                        <input type="text" class="form-control" name="parent_name" id="parent_name" placeholder="Hãy điền họ và tên phụ huynh" value="{{ $student->parent_name }}"/>
                    </div>

                    <div class="form-group">
                        <label for="parent_dob">Ngày sinh (Tháng/Ngày/Năm)</label>
                        <input type="date" class="form-control" name="parent_dob" id="parent_dob" placeholder="Hãy ngày sinh của phụ huynh" value="{{ $student->parent_dob }}"/>
                    </div>

                    <div class="form-group">
                        <label for="parent_gender">Giới tính</label>
                            <select class="form-control" name="parent_gender" id="parent_gender">
                                <option selected="true" disabled="disabled">-- Hãy chọn giới tính --</option>
                                <option value="Nam">Nam</option>
                                <option value="Nữ">Nữ</option>
                                <option value="Không xác định">Không xác định</option>                                
                            </select>
                    </div>

                    <div class="form-group">
                        <label for="parent_job">Nghề nghiệp</label>
                        <input type="text" class="form-control" name="parent_job" id="parent_job" placeholder="Hãy điền khối của phụ huynh" value="{{ $student->parent_job }}"/>
                    </div>

                    <div class="form-group">
                        <label for="parent_nation">Dân tộc</label>
                        <input type="text" class="form-control" name="parent_nation" id="parent_nation" placeholder="Hãy điền dân tộc của phụ huynh" value="{{ $student->parent_nation }}"/>
                    </div>

                    <div class="form-group">
                        <label for="parent_phone">Số điện thoại</label>
                        <input type="text" class="form-control" name="parent_phone" id="parent_phone" placeholder="Hãy điền số điện thoại của phụ huynh" value="{{ $student->parent_phone }}"/>
                    </div>   

                    <div class="form-group">
                        <label for="parent_email">Email</label>
                        <input type="text" class="form-control" name="parent_email" id="parent_email" placeholder="Hãy điền số điện thoại của phụ huynh" value="{{ $student->parent_email }}"/>
                    </div>  
             
            </div>
            <button type="submit" class="btn btn-primary">Lưu</button>
            
        <!-- </form>  -->
        </div>
    </div>    

</section>
</form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>    
</body>
</html>