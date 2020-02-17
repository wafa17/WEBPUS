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
      <form action="send_input_buku.php" method="POST">
        <div class="form-group">
          <label for="kode_buku">Kode Buku</label>
          <input type="text" class="form-control" name="kode_buku">
        </div>
        <div class="form-group">
          <label for="isbn">ISBN</label>
          <input type="text" class="form-control" name="isbn">
        </div>
        <div class="form-group">
          <label for="judul_buku">Judul Buku</label>
          <input type="text" class="form-control" name="judul_buku">
        </div>
        <div class="form-group">
          <label for="tahun_terbit">Tahun Terbit</label>
          <input type="text" class="form-control" name="tahun_terbit">
        </div>
        <div class="form-group">
          <label for="pengarang">Pengarang</label>
          <input type="text" class="form-control" name="pengarang">
        </div>
        <div class="form-group">
          <label for="penerbit">Penerbit</label>
          <input type="text" class="form-control" name="penerbit">
        </div>
        <div class="form-group">
          <label for="jenis_buku">Jenis Buku</label>
          <input type="text" class="form-control" name="jenis_buku">
        </div>
        <button type="submit" class="btn btn-primary ">Input</button>
        <div class="text-center p-t-136">
            <a class="txt2" href="databuku_slogin.php">
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