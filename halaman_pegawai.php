<!DOCTYPE html>
<html>
<head>
	<title>Laporan Proggres Pekerjaan PT. Parahyangan  Teknika Persada</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<center><h2>Laporan Proggres Pekerjaan PT. Parahyangan Persada</h2></center>
	<h3>Halaman User>>></h3>

	<style>
		body{
			font-family: 'Roboto';
		}
		table {
			border-collapse: collapse;
		}

		table, th, td {
			border: 1px solid black;
			padding: 10px;
		}
	</style>
	

	<?php
	// menghubungkan dengan koneksi database
	include 'koneksi.php';

	// mengambil data barang dengan kode paling besar
	$query = mysqli_query($koneksi, "SELECT max(kode_laporan) as kodelaporanTerbesar FROM laporan");
	$data = mysqli_fetch_array($query);
	$kode_laporan = $data['kodelaporanTerbesar'];

	// mengambil angka dari kode barang terbesar, menggunakan fungsi substr
	// dan diubah ke integer dengan (int)
	$urutan = (int) substr($kode_laporan, 3, 3);

	// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
	$urutan++;

	// membentuk kode barang baru
	// perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
	// misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
	// angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya LPP 
	$huruf = "LPP";
	$kode_laporan = $huruf . sprintf("%03s", $urutan);
	?>

<?php //kode agar jenis laporan di isi
if (isset($_GET['jenis_laporan'])) {
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
 

	<form method="post" action="simpan2.php">
		<label>Kode Laporan</label><br/>
		<input type="text" name="kode_laporan" required="required" value="<?php echo $kode_laporan ?>" readonly>

		<br>

		<div style="margin-bottom: 1rem;">
        <label>Jenis Laporan</label> <br>
        	<input type="radio" name="jenis_laporan" value="Laporan Analis"> Laporan Analis <br>
        	<input type="radio" name="jenis_laporan" value="Laporan Harga Pokok Produksi"> Laporan HPP <br>
        	<input type="radio" name="jenis_laporan" value="Lampiran HPP">Lampiran HPP
    	</div>

		<label>Bentuk Laporan</label><br/>
		<input type="text" name="bentuk_laporan" required="required">

		<br>

		<label>Tanggal</label><br/>
		<input type="date" name="tanggal" required="required">

		<br>

		<label>Isi Laporan</label><br/>
		<textarea name="isi" rows="10" cols="150" required="required"></textarea>

		<br>

		<div>
			<label></label><br>
			<input type="hidden" name="revisi" value=""><br>
			<input type="hidden" name="revisi" value="">
		</div>

		<br>

		<label></label><br/>
		<input type="hidden" name="keterangan" required="required">

		<br>

		<input type="submit" value="Simpan">
	</form>

	<br>

	<a href="logout.php">LOGOUT</a>
	<br>

	<hr>
	<br>

	<table border="1">
		<thead>
			<tr>
				<th>Kode Laporan</th>
				<th>Jenis Laporan</th>
				<th>Bentuk Laporan</th>
				<th>Tanggal(y-m-d)</th>
				<th>isi</th>
				<th>Revisi</th>
				<th>Keterangan</th>
				<th>Opsi</th>
			</tr>
		</thead>
		<tbody>
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
					<td><?php echo $b['revisi']; ?></td>
					<td><?php echo $b['keterangan']; ?></td>
									<td>
					<a href="edit2.php?kode_laporan=<?php echo $b['kode_laporan'] ?>">EDIT</a>
				</td>
				</tr>
				<?php 
			}
			?>
		</tbody>
	</table>
</body>
</html>