<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
		<title>DATA KARYAWAN</title>
</head>
<body>
	
<!--ISI-->
	<div class="row">
		<div class="col-md-6">
			<h3 class="text-center">Halaman Login</h3>
	</div>

	<div class="col-md-12">
		<form method="post" action="login_proses.php">
			
			<div class="form-group">
				<span class="form-group-addon" id="basic-addon1">
					<span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>				
				<label>NIK</label>
				<input type="text" name="nik" class="form-control" placeholder="Masukan NIK">
			</div>

			<div class="form-group">
				<span class="form-group-addon" id="basic-addon1">
					<span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
		<label>Password</label>

		<input type="password" name="password" class="form-control" placeholder="Masukkan Password">
	</div>
	<div class="form-group">
		<button type="Login" class="btn-btn-primary">Login</button>
		</div>
</form>

<?php 
if (isset($_GET['pesan'])){
?>
<script>
function myFunction() {
  alert("Password dan Username Salah!!!");
}
window.onload=myFunction;
</script>
<?php
}
?>

<!--AKHIR ISI-->
</div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>