<?php
include "koneksi.php";
$kode_buku = $_REQUEST['kode_buku'];
$isbn =  $_REQUEST['isbn'];
$judul_buku = $_REQUEST['judul_buku'];
$tahun_terbit = $_REQUEST['tahun_terbit'];
$pengarang = $_REQUEST['pengarang'];
$penerbit =  $_REQUEST['penerbit'];
$jenis_buku =  $_REQUEST['jenis_buku'];

if (!empty($kode_buku) && !empty($isbn) && !empty($judul_buku) && !empty($tahun_terbit) && !empty($pengarang) && !empty($penerbit) && !empty($jenis_buku)) { 
	$modal=mysqli_query($koneksi,"UPDATE buku SET kode_buku = '$kode_buku',isbn = '$isbn',judul_buku = '$judul_buku',tahun_terbit = '$tahun_terbit',pengarang = '$pengarang',penerbit = '$penerbit',jenis_buku = '$jenis_buku' WHERE kode_buku= '$kode_buku'");
	$result = mysqli_query($conn, $sqli);
	header('location:databuku_slogin.php');

	if ($result) {
      echo "Data berhasil di update";
    } else {
      echo "Data gagal di update";
    }  
} else {
    if (empty($kode_buku)) { 
      echo "Kode Buku harus di isi"; 
    } 
    
    if (empty($isbn)) { 
      echo "Nomor ISBN harus di isi"; 
    } 
    
    if (empty($judul_buku)) { 
      echo "Judul Buku harus di isi"; 
    }
    
    if (empty($tahun_terbit)) { 
      echo "Tahun Terbit harus di isi"; 
    }
  }
  
  mysqli_close($conn);  
?>
?>