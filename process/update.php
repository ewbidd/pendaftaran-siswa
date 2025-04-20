<?php
include '../config/database.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jk = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$sekolah = $_POST['sekolah_asal'];

$sql = "UPDATE siswa SET 
        nama='$nama', 
        alamat='$alamat', 
        jenis_kelamin='$jk', 
        agama='$agama', 
        sekolah_asal='$sekolah' 
        WHERE id=$id";

$conn->query($sql);
header("Location: ../views/list.php");
?>
