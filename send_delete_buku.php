<?php
include "koneksi.php";
$kode_buku=$_GET['kode_buku'];
$modal=mysqli_query($koneksi,"Delete FROM buku WHERE kode_buku='$kode_buku'");
header('location:databuku_slogin.php');
?>