<?php
include 'connect.php';
$id             = $_GET['id'];
$nama           = $_GET['nama'];
$email          = $_GET['email'];
$phone          = $_GET['phone'];
$query="UPDATE bukutelepon SET nama='$nama',email='$email',tel='$phone' where id='$id'";
mysqli_query($link, $query);
header("location:mockup.php");
?> 
