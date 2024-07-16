<?php include('stafserver.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
	body{
		background-image:url("https://img.freepik.com/free-photo/gradient-navy-blue-digital-grid-wallpaper_53876-104785.jpg");
            background-size:cover;
	}
  </style>
</head>
<body>
  <div class="header">
  	<h2>Staff Register</h2>
  </div>
	
  <form method="post" action="staffregister.php">
  	<?php include('stafferror.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_staff">Register</button>
  	</div>
  	<p>
  		Back to admin page <a href="admin.php">Admin</a>
  	</p>
  </form>
</body>
</html>