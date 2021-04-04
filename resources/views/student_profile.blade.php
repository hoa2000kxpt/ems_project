<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        body {
          padding: 0;
          margin: 0;
          font-family: 'Lato', sans-serif;
          color: #000;
        }

        .student-profile .card {
          border-radius: 10px;
        }

        .student-profile .card .card-header .profile_img {
          width: 150px;
          height: 150px;
          object-fit: cover;
          margin: 10px auto;
          border: 10px solid #ccc;
          border-radius: 50%;
        }

        .student-profile .functions {
          margin-top: 1em;
          vertical-align: middle;
          text-align:center;
          margin-bottom: 1em;
        }

        .student-profile .card h3 {
        font-size: 20px;
        font-weight: 700;
        }

        .student-profile .card p {
        font-size: 16px;
        color: #000;
        }

        .student-profile .table th,
        .student-profile .table td {
        font-size: 14px;
        padding: 5px 10px;
        color: #000;
        }
    </style>
</head>
<body>
    <!-- General Student Profile  -->
<div class="student-profile py-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent text-center">
            <img class="profile_img" src="https://placeimg.com/640/480/arch/any" alt="">
            <h3>Đỗ Văn Hòa</h3>
          </div>
          <div class="card-body">
            <p class="mb-0"><strong class="pr-1">Mã học sinh:</strong>1801040089</p>
            <p class="mb-0"><strong class="pr-1">Lớp:</strong>5A</p>            
          </div>          
        </div>
        <div class="functions">
          <a href="#" class="btn btn-info">Chỉnh sửa</a>
          <a href="#" class="btn btn-warning">Quay lại</a>
        </div>
      </div>

      <!-- Student Profile Details -->
      <div class="col-lg-8">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Thông tin học sinh</h3>
          </div>
          <div class="card-body pt-0">
            <table class="table table-bordered">
              <tr>
                <th width="30%">Họ và tên</th>
                <td width="2%">:</td>
                <td>Đỗ Văn Hòa</td>
              </tr>
              <tr>
                <th width="30%">Ngày/Tháng/Năm sinh</th>
                <td width="2%">:</td>
                <td>26/09/2000</td>
              </tr>
              <tr>
                <th width="30%">Giới tính</th>
                <td width="2%">:</td>
                <td>Nam</td>
              </tr>
              <tr>
                <th width="30%">Dân tộc</th>
                <td width="2%">:</td>
                <td>Kinh</td>
              </tr>
              <tr>
                <th width="30%">Địa chỉ</th>
                <td width="2%">:</td>
                <td>Phùng Khoang, Hà Đông</td>
              </tr>
              <tr>
                <th width="30%">Số điện thoại</th>
                <td width="2%">:</td>
                <td>0968581428</td>
              </tr>
            </table>
          </div>

          <!-- Parent Info -->
          <div class="card-header bg-transparent border-0">
              <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Thông tin phụ huynh</h3>            
          </div>

          <div class="card-body pt-0">
            <table class="table table-bordered">
              <tr>
                <th width="30%">Họ và tên</th>
                <td width="2%">:</td>
                <td>Nguyễn Thị Mai Huệ</td>
              </tr>
              <tr>
                <th width="30%">Ngày/Tháng/Năm sinh</th>
                <td width="2%">:</td>
                <td>22/09/1967</td>
              </tr>
              <tr>
                <th width="30%">Giới tính</th>
                <td width="2%">:</td>
                <td>Nữ</td>
              </tr>
              <tr>
                <th width="30%">Nghề nghiệp</th>
                <td width="2%">:</td>
                <td>Giáo viên </td>
              </tr>
              <tr>
                <th width="30%">Dân tộc</th>
                <td width="2%">:</td>
                <td>Kinh</td>
              </tr>
              <tr>
                <th width="30%">Số điện thoại</th>
                <td width="2%">:</td>
                <td>0978567689</td>
              </tr>
              <tr>
                <th width="30%">E-mail</th>
                <td width="2%">:</td>
                <td>nguyenthimaihue1967@gmail.com</td>
              </tr>
            </table>
          </div>

        </div>
      </div>


      


    </div>
  </div>
</div>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>    
</body>
</html>