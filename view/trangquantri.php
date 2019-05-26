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
      <a class="navbar-brand" href="<?php helper::url('admin', 'trangquantri'); ?>">Trang quản trị</a>
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
  </nav>
     <div class="container" style="font-size: 15px">
      <div class="row">
        <div class="col-md-12">
      <button class="btn btn-default" data-toggle="modal" data-target="#a"><a href="<?php helper::url('admin', 'dashboard'); ?>">Sinh viên</a></button>
        <button class="btn btn-default" data-toggle="modal" data-target="#a"><a href="<?php helper::url('admin', 'quanligv'); ?>">Giáo viên</a></button>
          <button class="btn btn-default" data-toggle="modal" data-target="#a"><a href="<?php helper::url('admin', 'quanlydiem'); ?>">Điểm</a></button>
        </div>
     
</body>
</html>