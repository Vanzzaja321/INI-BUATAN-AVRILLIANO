<?php
include "koneksi.php";

if (isset($_POST['simpan'])) {
    $nama   = $_POST['nama_hewan'];
    $jenis  = $_POST['jenis_hewan'];
    $asal   = $_POST['asal'];
    $jumlah = $_POST['jumlah'];

    $sql = mysqli_query($koneksi, "INSERT INTO hewan (nama_hewan, jenis_hewan, asal, jumlah) 
                                   VALUES ('$nama', '$jenis', '$asal', '$jumlah')");

    if ($sql) {
        echo "<script>
                alert('Data berhasil ditambahkan!');
                window.location.href='index.php';
              </script>";
    } else {
        echo "<script>
                alert('Gagal menambahkan data!');
              </script>";
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Hewan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body class="container mt-5">
    <h2 class="mb-4">Tambah Data Hewan</h2>
    
    <form method="post">
      <div class="mb-3">
        <label class="form-label">Nama Hewan</label>
        <input type="text" name="nama_hewan" class="form-control" required>
      </div>
      
      <div class="mb-3">
        <label class="form-label">Jenis Hewan</label>
        <input type="text" name="jenis_hewan" class="form-control" required>
      </div>
      
      <div class="mb-3">
        <label class="form-label">Asal</label>
        <input type="text" name="asal" class="form-control" required>
      </div>
      
      <div class="mb-3">
        <label class="form-label">Jumlah</label>
        <input type="number" name="jumlah" class="form-control" required>
      </div>
      
      <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
      <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
