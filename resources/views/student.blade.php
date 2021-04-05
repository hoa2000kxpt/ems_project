<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
          .table td, .table th {
            vertical-align: middle !important;
          }

          .table #functions {
            display: flex;            
          }

          .table #functions .btn {
            margin-right: 0.5em;
          }

          /* .form-control input {
            width: 50% !important;
          } */

          /* .form-control .search {
            display: flex !important;
          } */
    </style>

    <title>Student Management System</title>
  </head>
  <body>
  @include("navbar")

  <div class="row header-container justify-content-center">
        <div class="header">
            <h1>Phần mềm quản lý học sinh</h1>
        </div>
  </div>

  @if($layout == 'index')
    <div class="container-fluid mt-4">
      <div class="row">
        <section class="col-md-12"> 
          @include('studentlists')
        </section>

        <section class="">
        </section> 
      </div>  
    </div>
    @elseif($layout == 'create')
      <div class="container-fluid mt-4">
        <div class="row">
          <section class="col-md-7"> 
            @include('studentlists')
          </section>

          <section class="col-md-5">
          <div class="card mb-3">
              <img class="card-img-top" src="https://nessar.net/wp-content/uploads/2020/02/lisegagne.jpg" alt="Card image cap">
              <div class="card-body">
                  <h5 class="card-title">Tạo học sinh </h5>
                  <p class="card-text">Bạn có thể điền thông tin học sinh ở đây:</p>      
              </div>
          </div>

          <form action="{{ action('StudentController@store')}}" method="POST"> 
              @csrf
              <div class="form-group">
                  <label for="student_id">Mã học sinh</label>
                  <input type="text" class="form-control" name="student_id" id="student_id" placeholder="Hãy điền mã hs"/>
                  @if ($errors->has('student_id'))
                    <span class="text-danger">{{ $errors->first('student_id') }}</span>
                  @endif
              </div>   

              <div class="form-group">
                  <label for="grade">Khối</label>
                  <input type="text" class="form-control" name="grade" id="grade" placeholder="Hãy điền khối hs"/>
                  @if ($errors->has('grade'))
                    <span class="text-danger">{{ $errors->first('grade') }}</span>
                  @endif
              </div>

              <div class="form-group">
                  <label for="class">Tên lớp</label>
                  <input type="text" class="form-control" name="class" id="class" placeholder="Hãy điền lớp hs"/>
                  @if ($errors->has('class'))
                    <span class="text-danger">{{ $errors->first('class') }}</span>
                  @endif
              </div>

              <div class="form-group">
                  <label for="fullname">Họ và Tên</label>
                  <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Hãy điền họ và tên hs"/>
                  @if ($errors->has('fullname'))
                    <span class="text-danger">{{ $errors->first('fullname') }}</span>
                  @endif
              </div>

              <div class="form-group">
                  <label for="head_teacher">Thầy/Cô giáo chủ nhiệm</label>
                  <input type="text" class="form-control" name="head_teacher" id="head_teacher" placeholder="Hãy điền tên giáo viên"/>
                  @if ($errors->has('head_teacher'))
                    <span class="text-danger">{{ $errors->first('head_teacher') }}</span>
                  @endif
              </div>
              <input type="submit" class="btn btn-info" value="Thêm vào">
              <input type="reset" class="btn btn-warning" value="Cài lại">

            </form>  
          </section> 
        </div>  
      </div>
    @elseif($layout == 'show')
      <div class="container-fluid mt-4">
          <div class="row">
            <section class="col-md-12"> 
              @include('studentlists')
            </section>

            <section class="">
            </section> 
          </div>  
        </div>
    
    @elseif($layout == 'edit')
      <div class="container-fluid">
        <div class="row">
          <section class="col-md-7"> 
            @include('studentlists')
          </section>

          <section class="col-md-5">
          <form action="{{ action('StudentController@update',['id'=>$student->id])}}" method="POST"> 
              @csrf
              @method('PATCH')
              <div class="form-group">
                  <label for="student_id">Mã học sinh</label>
                  <input value="{{ $student->student_id}}" type="text" class="form-control" name="student_id" id="student_id" placeholder="Hãy điền mã hs"/>
                  @if ($errors->has('student_id'))
                    <span class="text-danger">{{ $errors->first('student_id') }}</span>
                  @endif
              </div>   

              <div class="form-group">
                  <label for="grade">Khối</label>
                  <input value="{{ $student->grade}}"  type="text" class="form-control" name="grade" id="grade" placeholder="Hãy điền khối hs"/>
                  @if ($errors->has('grade'))
                    <span class="text-danger">{{ $errors->first('grade') }}</span>
                  @endif
              </div>

              <div class="form-group">
                  <label for="class">Tên lớp</label>
                  <input value="{{ $student->class}}"  type="text" class="form-control" name="class" id="class" placeholder="Hãy điền lớp hs"/>
                  @if ($errors->has('class'))
                    <span class="text-danger">{{ $errors->first('class') }}</span>
                  @endif
              </div>

              <div class="form-group">
                  <label for="fullname">Họ và Tên</label>
                  <input value="{{ $student->fullname}}"  type="text" class="form-control" name="fullname" id="fullname" placeholder="Hãy điền họ và tên hs"/>
                  @if ($errors->has('fullname'))
                    <span class="text-danger">{{ $errors->first('fullname') }}</span>
                  @endif
              </div>

              <div class="form-group">
                  <label for="head_teacher">Thầy/Cô giáo chủ nhiệm</label>
                  <input value="{{ $student->head_teacher}}"  type="text" class="form-control" name="head_teacher" id="head_teacher" placeholder="Hãy điền tên giáo viên"/>
                  @if ($errors->has('head_teacher'))
                    <span class="text-danger">{{ $errors->first('head_teacher') }}</span>
                  @endif
              </div>
              <input type="submit" class="btn btn-info" value="Xác nhận">
              <input type="reset" class="btn btn-warning" value="Cài lại">
                              
            </form>  
          </section> 
        </div>
      </div>

    @elseif($layout == 'search')  
    <div class="container-fluid mt-4">
          <div class="row">
            <section class="col-md-12"> 
              @include('studentlists')
            </section>

            <section class="">
            </section> 
          </div>  
        </div>
    @endif

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>