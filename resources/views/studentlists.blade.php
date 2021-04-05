@if(\Session::has('success'))
<div class="alert alert-success">
    <h4> {{ \Session::get('success') }} </h4>
</div>
<hr>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="card mb-3">
  <!-- <img class="card-img-top" src="https://ielts-thanhloan.com/wp-content/uploads/2021/01/education.jpg" alt="Card image cap"> -->
  <div class="card-body">
      <h5 class="card-title">Danh sách học sinh </h5>
      <p class="card-text">Bạn có thể tìm tất cả thông tin học sinh ở đây:</p>
  </div>
</div>

<form action="/search" method="GET" role="search">
  <div class="form-group">  
        <label for="search_box"><h6>Hộp Tìm kiếm</h6></label>
          <div class="search" style="display:flex;">
              <input type="text" class="form-control" name="search_box" id="search_box" placeholder="Tìm kiếm học sinh theo khối, lớp,..." style="width:30%;margin-right: 0.5em;"/>
              <button type="submit" class="btn btn-primary">Tìm kiếm</button>
          </div>
  </div>
</form>

<table class="table thead-light">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Mã học sinh</th>
      <th scope="col">Khối</th>
      <th scope="col">Tên lớp</th>
      <th scope="col">Họ và Tên</th>
      <th scope="col">Thầy/Cô giáo chủ nhiệm</th>
      <th scope="col">Tính năng</th>
    </tr>
  </thead>
  <tbody>
    @foreach($students as $student)
    <tr>
        <th scope="row">{{ $student->id }}</th>
        <td>{{ $student->student_id }}</td>
        <td>{{ $student->grade }}</td>
        <td>{{ $student->class }}</td>
        <td>{{ $student->fullname }}</td>
        <td>{{ $student->head_teacher }}</td>
        <td id="functions">           
          <a href="{{ url('/student_profile/'.$student->id) }}" class="btn btn-info">Xem hồ sơ</a> 
          <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-warning">Sửa</a>
          <a data-toggle="modal" class="btn btn-danger" data-target="#delete_data" style="color:white;">Xóa</a>
        </td>
    </tr>    

    @endforeach  
    </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="delete_data" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cảnh báo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Bạn xác nhận muốn xóa cột này?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
        <a href="/delete/{{ $student->id }}"><button type="button" class="btn btn-danger">Xác nhận xóa</button></a>
      </div>
    </div>
  </div>
</div>