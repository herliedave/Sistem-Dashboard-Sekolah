<?php
session_start();
require 'koneksi.php';

if ( isset($_POST['login']) ) {
	
	$kode = htmlspecialchars($_POST['kode']);
	$password = htmlspecialchars($_POST['password']);
	$query = mysqli_query($conn, "SELECT * FROM tbstaff WHERE kode = '$kode'");
	$num = mysqli_num_rows($query);
	$result = mysqli_fetch_assoc($query);

	if ( $num > 0 ) {
		
		if ( password_verify($password, $result['password']) ) {
			
			$_SESSION['nama'] = $result['nama'];
			$_SESSION['kode'] = $result['kode'];
			echo "<script>location.href = 'dashboard/'</script>";

		} else {

			echo "<script>alert('Password salah')</script>";

		}

	} else {
		echo "<script>alert('kode Tidak Ditemukan')</script>";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">

	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>

	<div class="container">
		<p class="text-center login-title">LOGIN</p>
		<div class="form">
			<form action="" method="POST">

				<div class="card-header">
					<h4>Login</h4>
				</div>

				<div class="card-body">
					<div class="input-grup">
						<label for="kode">Kode</label>	
						<input type="text" name="kode" id="kode" class="input" autocomplete="off" required>
					</div>
		
					<div class="input-grup mt-4">
						<label for="password">Password</label>
						<input type="password" name="password" id="password" class="input" required>
					</div>
					
					<div class="btn mt-5 mb-3 p-0 d-flex justify-content-center">
						<button type="submit" name="login" id="login" class="login">LOGIN</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>