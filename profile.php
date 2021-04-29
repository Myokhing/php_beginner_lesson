<?php 
	session_start();
	if (!isset($_SESSION['user'])) {
		header('location: index.php');
		exit();
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User Profile</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container mt-5">
		<h1 class="mb-3">John Doe (manager)</h1>
		<?php 
			if (isset($_GET['error'])) : ?>
				<div class="alert-warning">
					Cannot upload file
				</div>
			<?php endif ?>
			<?php 
			if (file_exists('_actions/photos/profile.jpg')) : ?>
				<img src="_actions/photos/profile.jpg" class="img-thumbnail mb-3" alt="Profile Photo" width="200">
				<?php endif ?>
				<form action="_actions/upload.php" method="post" enctype="multipart/form-data">
					<div class="input-group mb-3">
						<input type="file" name="photo" class="form-control">
						<button class="btn btn-secondary">Upload</button>
					</div>
				</form>
		<ul class="list-group">
			<li class="list-group-item"><b>Email: </b>john@gamil.com</li>
			<li class="list-group-item"><b>Phone:</b>09257031942</li>
			<li class="list-group-item"><b>Address: </b>321, main street</li>
		</ul>
		<br>
		<a href="actions/logout.php">Logout</a>
	</div>
	
</body>
</html>