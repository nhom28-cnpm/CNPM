<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Đăng nhập</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
  
  <div class="container">
  
  <form class="form-signin" method="POST" action="<?php helper::url('admin', 'index'); ?>">
    <h3 class="form-signin-heading">Mời bạn nhập thông tin đăng nhập</h3>
    <?php if (!empty($errors)) : ?>
    	<?php foreach( $errors as $error ) : ?>
  	   <div class="alert alert-danger" role="alert"><?php echo $error; ?></div>
      <?php endforeach; ?>
    <?php endif; ?>
    
    <label for="username" class="sr-only">Username</label>
    <input style="width: 400px;" type="text" name="username" class="form-control" placeholder="Username" required autofocus>
    <label for="password" class="sr-only">Password</label>
    <input style="width: 400px;"  type="password" name="password" class="form-control" placeholder="Password" required>
    <button style="width: 200px;"  class="btn btn-lg btn-primary btn-block" type="submit" name="login">Đăng nhập</button>
  </form>

</div> 
</body>
</html>