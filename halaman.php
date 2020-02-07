 <?php 
 session_start();
 	if(empty($_SESSION['email'])){
 		header("location:index.php?pesan+belum_login");
 	}
 ?>
<?php
include('conn.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Toko Sembako</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
</head>
<body>
	
	<div class="container" style="margin-top:20px">
		<h2>
			<center> Toko Sembako </center>
			<a class="btn btn-light" align="right" href="logout.php" role="button">Logout</a>
		</h2>
		
		<hr>
		<div class="text-right">
		</div>
		<br>
		<table class="table table-striped table-hover table-sm table-bordered">
			<thead class="thead-dark">
				<tr>
					<th>No</th>
					<th>Nama Barang</th>
					<th>Harga</th>
				</tr>
			</thead>
			<tbody>
					<tr>
						<td> Indomie </td>
						<td><img src=img/indomie.png width="100" height="100"> </td>
						<td> Rp. 2500 </td>
					</tr>
					<tr>
						<td> Energen </td>
						<td><img src=img/energen.jpg width="100" height="100"> </td>
						<td> Rp. 1500 </td>
					</tr>
					<tr>
						<td> Gulaku </td>
						<td><img src=img/gulaku.jfif width="100" height="100"> </td>
						<td> Rp. 12500 </td>
					</tr>
					<tr>
						<td> Tepung Beras </td>
						<td><img src=img/tepung.jpg width="100" height="100"> </td>
						<td> Rp. 9000 </td>
					</tr>
					<tr>
						<td> Sirup </td>
						<td><img src=img/sirup.jfif width="100" height="100"> </td>
						<td> Rp. 1700 </td>
					</tr>
					<tr>
						<td> Minyak Goreng </td>
						<td><img src=img/minyak.jfif width="100" height="100"> </td>
						<td> Rp. 20000 </td>
					</tr>
			<tbody>
		</table>
		
	</div>

	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
</body>
</html>