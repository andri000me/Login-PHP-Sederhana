<?php 
	session_start();
	$query=new mysqli('localhost','root','','cloud');

	$email = $_POST['email'];
	$password = $_POST['password'];

	$data = mysqli_query($query, "SELECT * FROM log WHERE email='$email' and password='$password'") or die(mysqli_error($query));

	$cek = mysqli_num_rows($data);

	if($cek>0){
		$_SESSION['email']=$email;
		$_SESSION['status']="login";
		header("location:halaman.php");
	} else{
		echo '<script>alert("Gagal melakukan login."); document.location="index.php";</script>';
	}
 ?>