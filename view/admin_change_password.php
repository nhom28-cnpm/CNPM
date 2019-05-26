<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Đổi mật khẩu</title>
</head>
<body>
<form method="POST" action="<?php helper::url('admin', 'changePassword'); ?>">
	<label>Mật khẩu cũ:</label>
	<input type="password" name="old_password">
	<label>Mật khẩu mới:</label>
	<input type="password" name="new_password">
	<label>Nhập lại mật khẩu:</label>
	<input type="password" name="repeat_password">
	<button type="submit" name="changePassword">Đổi mật khẩu</button>
</form>
</body>
</html>