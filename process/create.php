<?php
include '../config/database.php';

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jk = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$sekolah = $_POST['sekolah_asal'];

$sql = "INSERT INTO siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal)
        VALUES ('$nama', '$alamat', '$jk', '$agama', '$sekolah')";

$conn->query($sql);
header("Location: ../index.php");
?>
