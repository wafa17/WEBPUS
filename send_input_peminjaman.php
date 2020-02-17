<?php
if (isset($_POST['nama_lengkap']) && $_POST['nama_lengkap']) {
    // memasukan file koneksi ke database
    require_once 'koneksi.php';
    // menyimpan variable yang dikirim Form
    $nama_lengkap = $_POST['nama_lengkap'];
    $nim = $_POST['nim'];
    $judul_buku = $_POST['judul_buku'];
    $tanggal_peminjaman = $_POST['tanggal_peminjaman'];
    $status = $_POST['status'];
    
        // encryption dengan md5
        // SQL Insert
        $sql = "INSERT INTO peminjaman (nama_lengkap, nim, judul_buku,tanggal_peminjaman, status) VALUES ('$nama_lengkap','$nim', '$judul_buku', '$tanggal_peminjaman', '$status')";
        $insert = $koneksi->query($sql);
        if (! $insert) {
            echo "<script>alert('".$dbconnect->error."gagal'); window.location.href = './inputpeminjaman.php';</script>";
        } else {
        echo "<script>alert('Insert Data Berhasil'); window.location.href = './peminjamanbuku.php';</script>";
        }    
    }
?>