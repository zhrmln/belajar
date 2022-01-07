<!DOCTYPE html>
<html>
<head>
	<title>Edit Laporan Proggres Pekerjaan</title>
</head>
<body>

	<h2>DATA LAPORAN PROGGRESS PEKERJAAN</h2>
	<br>
	<br>
	<h3>Edit Laporan</h3>



	<?php // koneksi ke database
	include 'koneksi.php';
	$kode_laporan = $_GET['kode_laporan'];
	$kode_laporan = mysqli_query($koneksi, "select * from laporan where kode_laporan='$kode_laporan'");
	$data = mysqli_fetch_array($kode_laporan);
	$kode_laporan = $data['kode_laporan'];

	$urutan = (int) substr($kode_laporan, 3, 3);

	$urutan++;

	$huruf = "LPP";
	$kode_laporan = $huruf . sprintf("%03s", $urutan);
	  ?>


<?php if (isset($_GET['jenis_laporan'])) {
 	if ($_GET['jenis_laporan'] == "kosong") {
 	}
 } ?>
 <?php //kode agar bentuk laporan di isi
if (isset($_GET['bentuk_laporan'])) {
 	if ($_GET['bentuk_laporan'] == "kosong") {
 	}
 } ?>
<?php //kode agar tanggal laporan di isi
if (isset($_GET['tanggal'])) {
 	if ($_GET['tanggal'] == "kosong") {
 	}
 } ?>
 <?php //kode agar isi laporan di isi
if (isset($_GET['isi'])) {
 	if ($_GET['isi'] == "kosong") {
 	}
 } ?>

 <form method="post" action="update2.php">
		<label>Kode Laporan</label><br/>
		<input type="text" name="kode_laporan" required="required" value="<?php echo $data['kode_laporan'] ?>" readonly>

		<br>

		<div style="margin-bottom: 1rem;">
        <label>Jenis Laporan</label> <br>
        	<input type="text" name="jenis_laporan" value="<?php echo $data['jenis_laporan'] ?>" readonly><br>
 
    	</div>

		<label>Bentuk Laporan</label><br/>
		<input type="text" name="bentuk_laporan" required="required" value="<?php echo $data['bentuk_laporan'] ?>">

		<br>

		<label>Tanggal</label><br/>
		<input type="date" name="tanggal" required="required" value="<?php echo $data['tanggal'] ?>">

		<br>

		<label>Isi Laporan</label><br/>
		<input type="text" name="isi" required="required" value="<?php echo $data['isi'] ?>">


		<br>


		<br>

		<input type="submit" value="Update">
	</form>

	<br>

	<a href="halaman_pegawai.php">kembali</a>
</body>
</html>