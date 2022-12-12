<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<title>MWS-Admin Login</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/index.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container admin">
		<div class="col-md-6 offset-md-3">
			<h3 class="text-center">ADMIN LOGIN</h3>
			<form action="checklogin" method="POST">
				<div class="form-group">
					<input type="email" name="admin_first" placeholder="Enter Something" class="form-control">
				</div>
				<div class="form-group">
					<input type="password" name="admin_second" class="form-control" placeholder="Password">
				</div>
				<button class="btn btn-success btn-block" type="submit" name="submit">Login</button>
			</form>
			<?php if (isset($_SESSION['loginErr'])) {
			?>
			<p class="text-warning">Crendentials not correct!</p>
			<?php
				unset($_SESSION['loginErr']);
			} ?>
		</div>
	</div>
</body>
</html>