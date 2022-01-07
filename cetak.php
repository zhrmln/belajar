<!DOCTYPE html>
<html>
<head>
	<title>PT> PARAHYANGAN TEKNIKA PERSADA</title>
	
</head>
<body>
 
<?php error_reporting (E_ALL ^ E_NOTICE); ?>



	<?php 
		include 'koneksi.php';
	 ?>

	<center><h2>LAPORAN PROGGRES PEKERJAAN</h2></center>
	<br/>
	<br/>
	<br/>


	<table border="1" style="width : 100%">
		<tr>
			<th width="1%">Kode Laporan</th>
			<th>Jenis Laporan</th>
			<th>Bentuk Laporan</th>
			<th>Tanggal</th>
			<th width="47%">Isi</th>
		</tr>
		<?php 
		$kodelaporan = mysqli_query($koneksi,"SELECT * FROM laporan");
			while($b = mysqli_fetch_array($kodelaporan)){
				?>
				<tr>
					<td><?php echo $b['kode_laporan']; ?></td>
					<td><?php echo $b['jenis_laporan']; ?></td>
					<td><?php echo $b['bentuk_laporan']; ?></td>
					<td><?php echo $b['tanggal']; ?></td>
					<td><?php echo $b['isi']; ?></td>
				</tr>
							<?php 
		}
		?>
	</table>

			<script >
				window.print()
			</script>

</body>
</html>