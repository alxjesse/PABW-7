<!DOCTYPE html>
<html lang="en">
<head>
	<title>JOIN OM-JEK DRIVER</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<background-image: url("D:\PEMWEB\TUGAS\ContactFrom_v1\ContactFrom_v1\images");>

	<div class="contact1">
		<div class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="images/om-jek.png" alt="IMG">
			</div>

			<?php

include "connect.php";
/* konfigurasi*/
$user='user';
$pass='rahasia';
$host='localhost';
$db='butel';

/* buat koneksi ke server mysql*/
$link=mysqli_connect($host,$user,$pass,$db);
if (mysqli_connect_errno()) {
	echo "Koneksi database gagal dibuat";
	exit;
}

$nama = $_POST['nama'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$sql = "INSERT INTO bukutelepon (nama, email, tel) ".
	"VALUES ('$nama','$email','$phone') ";

$res =  mysqli_query($link, $sql);
if ($res) {
	echo "Data berhasil disimpan";
}
else{
	echo mysqli_error($link);
}
/*tutup koneksi MySQL*/
mysqli_close($link); ?>
<br>
<a href="mockup.php"> Lihat data! </a>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
