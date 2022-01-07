<?php 
// https://www.malasngoding.com
// menghubungkan koneksi database
include 'koneksi.php';

// menangkap data dari form
$kode_laporan = $_POST['kode_laporan'];
$jenis_laporan = $_POST['jenis_laporan'];
$bentuk_laporan = $_POST['bentuk_laporan'];
$tanggal = $_POST['tanggal'];
$tanggal = date('y-m-d');
$isi = $_POST['isi'];
$revisi = $_POST['revisi'];
$keterangan = $_POST['keterangan'];

// menginput data ke table barang

mysqli_query($koneksi, "update laporan set  jenis_laporan='$jenis_laporan', bentuk_laporan='$bentuk_laporan', tanggal='$tanggal', isi='$isi', revisi='$revisi', keterangan='$keterangan' where kode_laporan='$kode_laporan'");

// mengalihkan halaman kembali ke index.php
header("location:halaman_pegawai.php");
?>