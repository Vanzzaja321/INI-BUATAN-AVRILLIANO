<?php
include "koneksi.php"; 
$id = $_GET['id'];

$hapus = mysqli_query($koneksi, "DELETE FROM hewan WHERE id_hewan='$id'");

if ($hapus) {
    echo "<script>alert('Data berhasil dihapus!'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Gagal menghapus data!'); window.location='index.php';</script>";
}
?>
