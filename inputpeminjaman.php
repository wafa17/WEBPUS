<!DOCTYPE html>
<html lang="en">
<head>
  <title>Input Buku</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body style="background-color: #b8b4a9;">
<div class="container">
  <div class="card">
    <div class="card-header bg-primary text-white">Form Input Buku</div>
    <div class="card-body" >
      <form action="send_input_peminjaman.php" method="POST">
        <div class="form-group">
          <label for="kode_buku">Nama Lengkap</label>
          <input type="text" class="form-control" name="nama_lengkap">
        </div>
        <div class="form-group">
          <label for="isbn">NIM</label>
          <input type="text" class="form-control" name="nim">
        </div>
        <div class="form-group">
          <label for="judul_buku">Judul Buku</label>
          <input type="text" class="form-control" name="judul_buku">
        </div>
        <div class="form-group">
          <label for="tahun_terbit">Tanggal Peminjaman</label>
          <input type="text" class="form-control" name="tanggal_peminjaman">
        </div>
        <div class="form-group">
          <label for="pengarang">Status</label>
          <input type="text" class="form-control" name="status">
        </div>
        <button type="submit" class="btn btn-primary ">Input</button>
        <div class="text-center p-t-136">
            <a class="txt2" href="peminjamanbuku.php">
              Back Data Buku
              <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
            </a>
          </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>