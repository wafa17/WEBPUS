<?php
if (isset($_POST['kode_buku']) && $_POST['kode_buku']) {
    // memasukan file koneksi ke database
    require_once 'koneksi.php';
    // menyimpan variable yang dikirim Form
    $kode_buku = $_POST['kode_buku'];
    $isbn = $_POST['isbn'];
    $judul_buku = $_POST['judul_buku'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $jenis_buku = $_POST['jenis_buku'];
    
        // encryption dengan md5
        // SQL Insert
        $sql = "INSERT INTO buku (kode_buku, isbn, judul_buku,tahun_terbit, pengarang, penerbit,jenis_buku) VALUES ('$kode_buku','$isbn', '   $judul_buku', '$tahun_terbit', '$pengarang', '$penerbit','$jenis_buku')";
        $insert = $koneksi->query($sql);
        if (! $insert) {
            echo "<script>alert('".$dbconnect->error."gagal'); window.location.href = './inputbuku.php';</script>";
        } else {
        echo "<script>alert('Insert Data Berhasil'); window.location.href = './databuku_slogin.php';</script>";
        }    
    }
?>