<?php
    include("../../function/koneksi.php");   
    include("../../function/first.php");   
     
    $user_id = $_GET['user_id'];
	
    $nama = $_POST['nama'];
	$email = $_POST["email"];
	$level = $_POST["level"];
	$status = $_POST["status"];	

	mysqli_query($koneksi, "UPDATE user SET nama='$nama',
											   email='$email',
											   level='$level',
											   status='$status'
											   WHERE user_id='$user_id'");

    header("location: ".BASE_URL."index.php?page=my_profile&module=user&action=list");
?>