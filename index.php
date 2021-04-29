
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style type="text/css">
		.wrap {
			width: 100%;
			max-width: 400px;
			margin: 40px auto;
		}
	</style>
</head>
<body class="text-center">
	<div class="wrap">
		<h1 class="h3 mb-3">Login</h1>
		<?php  
		if (isset($_GET['incorrect'])) : ?>
	<div class="alert alert-warning">Incorrect Email or Password</div>
	</div>
	<?php endif ?>
	<form action="_actions/login.php" method="post">
		<input type="text" name="email" class="form-control mb-2" placeholder="Email" required>
		<input type="password" name="password" class="form-control mb-2" placeholder="Password" required>
		<button type="submit" class="w-100 btn btn-lg btn-primary">Login</button>
	</form>
	<br>
	<a href="register.php">Register</a>
</body>
</html>