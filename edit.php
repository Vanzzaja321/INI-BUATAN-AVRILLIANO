<?php
include "koneksi.php"; 

$id = $_GET['id'];


$query = mysqli_query($koneksi, "SELECT * FROM hewan WHERE id_hewan='$id'");
$data  = mysqli_fetch_array($query);

if (isset($_POST['simpan'])) {
    $nama   = $_POST['nama'];
    $jenis  = $_POST['jenis'];
    $asal   = $_POST['asal'];
    $jumlah = $_POST['jumlah'];

    $update = mysqli_query($koneksi, "UPDATE hewan SET 
                nama_hewan='$nama',
                jenis_hewan='$jenis',
                asal='$asal',
                jumlah='$jumlah'
                WHERE id_hewan='$id'");

    if ($update) {
        echo "<script>alert('Data berhasil diperbarui!'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Gagal memperbarui data!');</script>";
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">  
    <title>Edit Data Hewan</title>
  </head>
  <body class="container mt-5">
    <h1 class="mb-4">Edit Data Hewan</h1>

    <form method="POST">
      <div class="mb-3">
        <label class="form-label">Nama Hewan</label>
        <input type="text" class="form-control" name="nama" value="<?= $data['nama_hewan']; ?>" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Jenis Hewan</label>
        <input type="text" class="form-control" name="jenis" value="<?= $data['jenis_hewan']; ?>" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Asal</label>
        <input type="text" class="form-control" name="asal" value="<?= $data['asal']; ?>" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Jumlah</label>
        <input type="number" class="form-control" name="jumlah" value="<?= $data['jumlah']; ?>" required>
      </div>

      <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
      <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>
  </body>
</html>
