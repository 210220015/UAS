</html>
	<head>
	<title>apa aja</title>
	</head>
	<body>

	<h2> Mart</h2>
	<br/>
	<a href="inputsatuan.php">+ TAMBAH SATUAN</a>
	<br/>
	<center><table border="1">
	<tr>
	<th>No</th>
		<th>Nama Satuan</th>
		<th>OPSI</th>
	</tr>
	<?php
	include 'koneksi.php';
	$no =1;
	$data = mysqli_query($koneksi,"select * from satuan");
	while($d= mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['nama']; ?></td>
			<td>
				<a href="editsatuan.php?id_satuan=<?php echo $d['id_satuan']; ?>">EDIT</a>
				<a href="hapussatuan.php?id_satuan=<?php echo $d['id_satuan']; ?>">HAPUS</a>
			<td>
		</tr>
	<?php
	}
	?>
	</table>
	</body>
	</html>