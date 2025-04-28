<?php
include '../config/koneksi.php';
include 'header.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM siswa WHERE id=$id");
$data = $result->fetch_assoc();
?>

<h2>Edit Data</h2>
<form action="process/update.php" method="POST">
    <input type="hidden" name="id" value="<?= $data['id'] ?>">

    <label>Nama:</label><br>
    <input type="text" name="nama" value="<?= $data['nama'] ?>" required><br>

    <label>Alamat:</label><br>
    <textarea name="alamat" required><?= $data['alamat'] ?></textarea><br>

    <label>Jenis Kelamin:</label><br>
    <input type="radio" name="jenis_kelamin" value="Laki-laki" <?= $data['jenis_kelamin'] == 'Laki-laki' ? 'checked' : '' ?>> Laki-laki
    <input type="radio" name="jenis_kelamin" value="Perempuan" <?= $data['jenis_kelamin'] == 'Perempuan' ? 'checked' : '' ?>> Perempuan<br>

    <label>Agama:</label><br>
    <select name="agama" required>
        <?php
        $agamas = ["Islam", "Kristen", "Katolik", "Hindu", "Buddha"];
        foreach ($agamas as $agama) {
            $selected = $data['agama'] == $agama ? 'selected' : '';
            echo "<option value='$agama' $selected>$agama</option>";
        }
        ?>
    </select><br>

    <label>Sekolah Asal:</label><br>
    <input type="text" name="sekolah_asal" value="<?= $data['sekolah_asal'] ?>" required><br><br>

    <button type="submit">Update</button>
</form>
<a href="../views/list.php">Kembali</a>

<?php include 'footer.php'; ?>
