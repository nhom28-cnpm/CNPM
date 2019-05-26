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
      <a class="navbar-brand" href="<?php helper::url('admin', 'dashboard'); ?>">Trang quản lí sinh viên</a>
    </div>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $this->user->username; ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php helper::url('admin', 'changePassword'); ?>">Đổi mật khẩu</a></li>
            <li><a href="<?php helper::url('admin', 'logout'); ?>">Thoát</a></li>
          </ul>
        </li>
      </ul>

          <div class="container" style="font-size: 15px">
      <div class="row">
        <div class="col-md-12">
        <button class="btn btn-default" data-toggle="modal" data-target="#a"><a href="<?php helper::url('admin', 'quanligv'); ?>">Giáo viên</a></button>
          <button class="btn btn-default" data-toggle="modal" data-target="#a"><a href="<?php helper::url('admin', 'quanlydiem'); ?>">Điểm</a></button>
        </div>
  </nav>

     <div class="container" style="font-size: 15px">
     	<div class="row">
     		<div class="col-md-12">
     		<button class="btn btn-default" data-toggle="modal" data-target="#create-post">Thêm sinh viên</button>
     		<button class="btn btn-default" data-toggle="modal" data-target="#delete-post">Xóa</button>
     		</div>
     
     		</div>
		<div class="row" style="padding-left: 500px;">
			<div class="timkiem">
				<form action="" method="GET">
				<table>
					<tr>
						<input type="hidden" name="controllerName" value="admin">
						<td><input type="text" name="tukhoa" placeholder="nhập từ khóa"></td>
						<td><input type="submit" value="Tìm kiếm"></td>
					</tr>
				</table>
					<input type="hidden" name="action" value="tim_kiem">
				</form>
			</div>
		</div>


	
     <div class="row">
     	<div class="col-md-12">
	<table class="table table-bordered">
		<tr>
			<th>Mã</th>
			<th>Mã Sinh viên</th>
			<th>Họ tên </th>
			<th>Ngày sinh</th>
			<th>Địa chỉ</th>
			<th>Giới tính</th>
			<th>Mã khoa</th>
			<th>Sửa thong tin</th>
		</tr>
		<?php foreach($this->posts as $post) : ?>
		<tr>
			<td style="width: 100px;"><?php echo $post->id; ?></td> 
			<td style="width: 300px;"><?php echo $post->masv; ?></td>
			<td><?php echo $post->hoten; ?></td>
			<td><?php echo $post->ngaysinh; ?></td>
			<td><?php echo $post->diachi; ?></td>
			<td><?php echo $post->gioitinh; ?></td>
			<td><?php echo $post->makhoa; ?></td>
			<td><button class="btn btn-default" data-toggle="modal" data-target="#update-post">Sửa sinh viên</button></td>
		</tr>
		<?php endforeach; ?>	
	</table>
		</div>
	</div>


</div>	

<?php $this->loadView('create-post'); ?>
<?php $this->loadView('delete-post'); ?>
<?php $this->loadView('update-post'); ?>
</body>
</html>