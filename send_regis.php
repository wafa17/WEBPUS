<?php
if (isset($_POST['nama_lengkap']) && $_POST['nama_lengkap']) {
    // memasukan file koneksi ke database
    require_once 'koneksi.php';
    // menyimpan variable yang dikirim Form
    $nama_lengkap = $_POST['nama_lengkap'];
    $nama_institusi = $_POST['nama_institusi'];
    $nohp = $_POST['nohp'];
    $level = $_POST['level'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    
    // validasi apakah password dengan repassword sama
    if ($password != $repassword) { // jika tidak sama
        echo "<script>alert('".$dbconnect->error."gagal'); window.location.href = './formregistrasi.php';</script>";   
    }
    else if(empty($nama_lengkap)){
        echo "<script>alert('Nama Lengkap belum diisi')</script>";
        echo "<meta http-equiv='refresh' content='1 url=formregistrasi.php'>";
    }
    else if(empty($nama_institusi)){
        echo "<script>alert('Nama Institusi belum diisi')</script>";
        echo "<meta http-equiv='refresh' content='1 url=formregistrasi.php'>";
    }
    else if(empty($nohp)){
        echo "<script>alert('Nomor HP belum diisi')</script>";
        echo "<meta http-equiv='refresh' content='1 url=formregistrasi.php'>";
    } else if(empty($level)){
        echo "<script>alert('Level belum diisi')</script>";
        echo "<meta http-equiv='refresh' content='1 url=formregistrasi.php'>";
    } else if(empty($password)){
        echo "<script>alert('Password belum diisi')</script>";
        echo "<meta http-equiv='refresh' content='1 url=formregistrasi.php'>";
    } else if(empty($email)){
        echo "<script>alert('Email belum diisi')</script>";
        echo "<meta http-equiv='refresh' content='1 url=formregistrasi.php'>";
    }else if(!empty($email)){

        // cek apakah email sudah terdaftar
        $query = "SELECT email FROM user WHERE email='$email'";
        $find = $koneksi->query($query);
    
        if ($find && mysqli_num_rows($find) > 0) {
            echo "<script>alert('User Telah terdaftar, silakan login'); window.location.href = './indexlogin.php';</script>";
        }
    }else{
        // encryption dengan md5
        // SQL Insert
        $sql = "INSERT INTO user (nama_lengkap, nama_institusi, nohp,level, email, pass) VALUES ('$nama_lengkap','$nama_institusi', '   $nohp', '$level', '$email', '$password')";
        $insert = $koneksi->query($sql);
        if (! $insert) {
            echo "<script>alert('".$dbconnect->error."gagal'); window.location.href = './formregistrasi.php';</script>";
        } else {
            echo "<script>alert('Insert Data Berhasil'); window.location.href = './indexlogin.php';</script>";
        }
    }
}
?>