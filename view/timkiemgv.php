<!DOCTYPE html>
<html lang="en">
<head>
  <title>Trang tìm kiếm</title>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
       <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php helper::url('admin', 'tim_kiemgv'); ?>">Trang tìm kiếm</a>
    </div>
  </nav>

  
     <div class="row">
      <div class="col-md-12">
  <table class="table table-bordered">
      <tr>
      <th>Mã</th>
      <th>Mã giáo viên</th>
      <th>Họ tên</th>
      <th>Ngày sinh</th>
      <th>Địa chỉ</th>
      <th> Giới tính</th>
      <th> Điện thoại</th>
      <th> Email </th>
      <th> Mã khoa </th>
      <th>Sửa thông tin</th>
    </tr>
    <?php foreach($this->db_timkiem as $gv) : ?>
    <tr>
      <td style="width: 100px;"><?php echo $gv->id; ?></td> 
      <td style="width: 60px;"><?php echo $gv->magv; ?></td>
      <td><?php echo $gv->hoten; ?></td>
      <td><?php echo $gv->ngaysinh; ?></td>
      <td><?php echo $gv->diachi; ?></td>
      <td><?php echo $gv->gioitinh; ?></td>
      <td><?php echo $gv->dienthoai; ?></td>
      <td><?php echo $gv->email; ?></td>
      <td><?php echo $gv->makhoa; ?></td>
      <td><button class="btn btn-default" data-toggle="modal" data-target="#update-giaovien">Sửa giáo viên</button></td>
   
    </tr>
    <?php endforeach; ?>  
  </table>
    </div>
  </div>
</div>  

<?php $this->loadView('update-giaovien'); ?>
</body>
</html>