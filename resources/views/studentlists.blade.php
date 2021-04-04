@if(\Session::has('success'))
<div class="alert alert-danger">
    <h4> {{ \Session::get('success') }} </h4>
</div>
<hr>
@endif

<div class="card mb-3">
  <!-- <img class="card-img-top" src="https://ielts-thanhloan.com/wp-content/uploads/2021/01/education.jpg" alt="Card image cap"> -->
  <div class="card-body">
      <h5 class="card-title">Danh sách học sinh </h5>
      <p class="card-text">Bạn có thể tìm tất cả thông tin học sinh ở đây:</p>
    
  </div>
</div>


<table class="table thead-light">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Mã sinh viên</th>
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
          <a href="{{url('student_profile')}}" class="btn btn-info">Xem hồ sơ</a> 
          <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-warning">Sửa</a>
          <a href="/delete/{{ $student->id }}" class="btn btn-danger">Xóa</a>
        </td>
    </tr>    
    @endforeach  
    </tbody>
</table>