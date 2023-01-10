<! DOCTYPE html>
<html>
<html>
<title>.></title>
</head>
<?php
//koneksi database
include "koneksi.php";
if(!empty($_POST['save'])){
	$nama_satuan= $_POST['nama'];
$a=mysqli_query($koneksi,"insert into satuan values('','$nama_satuan')");
if ($a){
header("location:tampilsatuan.php");
}else{
	echo mysqli_error();
}
}

?>
<body>
<h2>supermarket cupcup<h/2>
<br/>
<a href="tampilsatuan.php">KEMBALI<a/>
<br/>
<br/>
<center><h3>TAMBAH DATA SATUAN</h3>
<form method="POST">
	<table>
	<tr>
	<td>Nama Satuan</td>
	<td><input type="text" Name="nama"></td>
	</tr>
	<tr>
	<td></td>
	<td><input type="submit" name="save"><td>
	</tr>
	</table>
	</form>
	</body>
	</html>