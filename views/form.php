<?php include '../views/header.php'; ?>
<form action="process/create.php" method="POST">
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
<a href="index.php" class="btn-kembali" style="display: inline-block; margin-top: 20px; padding: 10px 20px; background-color: #4CAF50;
 color: white; text-decoration: none; border-radius: 8px; transition: background-color 0.3s ease; font-weight: bold;" 
 onmouseover="this.style.backgroundColor='#45a049'" onmouseout="this.style.backgroundColor='#4CAF50'">⬅ Kembali</a>
<?php include '../views/footer.php'; ?>
