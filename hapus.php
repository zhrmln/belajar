<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$kode_laporan = $_GET['kode_laporan'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from laporan where kode_laporan='$kode_laporan'");
 
// mengalihkan halaman kembali ke index.php
header("location:halaman_admin.php");
 
?>