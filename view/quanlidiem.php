<!DOCTYPE html>
<html lang="en">
<head>
	<title>Trang quản trị</title>
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
      <a class="navbar-brand" href="<?php helper::url('admin', 'quanlydiem'); ?>">Trang qldiem</a>
    </div>
        <div class="container" style="font-size: 15px">
      <div class="row">
        <div class="col-md-12">
      <button class="btn btn-default" data-toggle="modal" data-target="#a"><a href="<?php helper::url('admin', 'dashboard'); ?>">Sinh viên</a></button>
        <button class="btn btn-default" data-toggle="modal" data-target="#a"><a href="<?php helper::url('admin', 'quanligv'); ?>">Giáo viên</a></button>
        </div>
 
   
  </nav>
     <div class="container" style="font-size: 15px">
     	<div class="row">
     		<div class="col-md-12">
     		<button class="btn btn-default" data-toggle="modal" data-target="#create-diem">Thêm điểm</button>
     		<button class="btn btn-default" data-toggle="modal" data-target="#delete-diem">Xóa</button>
     		</div>
     
     		</div>

	
     <div class="row">
     	<div class="col-md-12">
	<table class="table table-bordered">
		<tr>
			<th>Mã điểm </th>
			<th>Mã sinh viên</th>
			<th>Điểm chuyên cần</th>
			<th>Điểm gk </th>
			<th>Điểm cuối kì</th>
			<th>Điểm trung bình</th>
			<th>Hạnh kiểm</th>
			<th>Mã tham gia học phần</th>
			<th>Sửa thông tin</th>
		</tr>
		<?php foreach($this->diems as $diem) : ?>
		<tr>
			<td style="width: 100px;"><?php echo $diem->id; ?></td> 
			<td style="width: 300px;"><?php echo $diem->masv; ?></td>
			<td><?php echo $diem->diemcc; ?></td>
			<td><?php echo $diem->diemgk; ?></td>
			<td><?php echo $diem->diemck; ?></td>
			<td><?php echo $diem->diemtb; ?></td>
			<td><?php echo $diem->hanhkiem; ?></td>
			<td><?php echo $diem->id_thamgiahocphan; ?></td>
			<td><button class="btn btn-default" data-toggle="modal" data-target="#update-diem">Sửa điểm</button></td>
		</tr>
		<?php endforeach; ?>	
	</table>
		</div>
	</div>
</div>	
<?php $this->loadView('create-diem'); ?>
<?php $this->loadView('update-diem') ?>
<?php $this->loadView('delete-diem') ?>
</body>
</html>