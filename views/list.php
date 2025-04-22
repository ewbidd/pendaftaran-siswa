<?php
include '../config/database.php';
include 'header.php';

$result = $conn->query("SELECT * FROM siswa");
?>

<h2>Daftar Siswa</h2>
<table border="1" cellpadding="8">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
        <th>Agama</th>
        <th>Sekolah Asal</th>
        <th>Tindakan</th>
    </tr>
    <?php $no = 1; while ($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $row['nama'] ?></td>
        <td><?= $row['alamat'] ?></td>
        <td><?= $row['jenis_kelamin'] ?></td>
        <td><?= $row['agama'] ?></td>
        <td><?= $row['sekolah_asal'] ?></td>
        <td>
            <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
            <a href="../process/delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Hapus data ini?')">Hapus</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
<a href="index.php" class="btn-kembali" style="display: inline-block; margin-top: 20px; padding: 10px 20px; background-color: #4CAF50; color: white; text-decoration: none; border-radius: 8px; transition: background-color 0.3s ease; font-weight: bold;" onmouseover="this.style.backgroundColor='#45a049'" onmouseout="this.style.backgroundColor='#4CAF50'">⬅ Kembali</a>

<?php include 'footer.php'; ?>
