<?php 
// menghubungkan koneksi database
include 'koneksi.php';

// menangkap data dari form
$kode_laporan = $_POST['kode_laporan'];
$jenis_laporan = $_POST['jenis_laporan'];
$bentuk_laporan = $_POST['bentuk_laporan'];
$tanggal = $_POST['tanggal'];
$isi = $_POST['isi'];
$revisi = $_POST['revisi'];
$keterangan = $_POST['keterangan'];

// menginput data ke table barang

mysqli_query($koneksi,"INSERT INTO laporan VALUES ('$kode_laporan', '$jenis_laporan', '$bentuk_laporan', '$tanggal', '$isi', '$revisi', '$keterangan')")or die(mysqli_error($koneksi));

// mengalihkan halaman kembali ke index.php
header("location:halaman_pegawai.php");
?>