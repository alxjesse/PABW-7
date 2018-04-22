<?php

include "connect.php";
$id = $_GET['id'];
$sql = mysqli_query($link, "SELECT * FROM bukutelepon WHERE id = '$id'");
$row = mysqli_fetch_array($sql);
?>

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

			<form class="contact1-form validate-form" action= "update.php?id='$id'" method="GET">
				<span class="contact1-form-title">
					EDIT DATA
				</span>
				<input type="hidden" value="<?php echo $row['id'];?>" name="id">

				<div class="wrap-input1 validate-input" data-validate = "Nama harus diisi">
					<input class="input1" type="text" name="nama" placeholder="Nama" value="<?php echo $row['nama'] ?>">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "E-mail tidak valid">
					<input class="input1" type="email" name="email" placeholder="Email" value="<?php echo $row['email'] ?>">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "No Hape dibutuhkan">
					<input class="input1" type="tel" name="phone" placeholder="NoHP" value="<?php echo $row['tel']  ?>">
					<span class="shadow-input1"></span>
				</div>
				
					<span class="shadow-input1"></span>

				<div class="container-contact1-form-btn">
					<button type= "submit" name = "submit" class="contact1-form-btn" value="<?php echo $row['id'] ?>">
						<span>
							Kirimkan Pengajuan Form
							<i class="fa fa-long-arrow-right" ></i>
						</span>
					</button>
				</div>
			</form>
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
