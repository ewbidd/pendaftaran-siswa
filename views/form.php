<?php include '../views/header.php'; ?>
<form action="../process/create.php" method="POST">
    <label>Nama:</label><br>
    <input type="text" name="nama" required><br>

    <label>Alamat:</label><br>
    <textarea name="alamat" required></textarea><br>

    <label>Jenis Kelamin:</label><br>
    <input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki
    <input type="radio" name="jenis_kelamin" value="Perempuan" required> Perempuan<br>

    <label>Agama:</label><br>
    <select name="agama" required>
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Katolik">Katolik</option>
        <option value="Hindu">Hindu</option>
        <option value="Buddha">Buddha</option>
    </select><br>

    <label>Sekolah Asal:</label><br>
    <input type="text" name="sekolah_asal" required><br><br>

    <button type="submit">Daftar</button>
</form>
<a href="../index.php">Kembali</a>
<?php include '../views/footer.php'; ?>
