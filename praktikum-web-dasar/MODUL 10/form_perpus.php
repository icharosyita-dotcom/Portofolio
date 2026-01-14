<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Perpustakaan Madiun</title>
</head>
<body>

<h2>Formulir Pendaftaran Perpustakaan Madiun</h2>

<form method="post">
    <table>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><input type="text" name="nama"></td>
        </tr>

        <tr>
            <td>Usia</td>
            <td>:</td>
            <td><input type="number" name="usia"></td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamat"></textarea></td>
        </tr>

        <tr>
            <td>Status</td>
            <td>:</td>
            <td>
                <select name="status">
                    <option value="">-- Pilih Status --</option>
                    <option value="Sekolah">Masih Sekolah</option>
                    <option value="Kuliah">Mahasiswa</option>
                    <option value="Umum">Umum</option>
                </select>
            </td>
        </tr>

        <tr>
            <td colspan="3">
                <input type="submit" value="Daftar">
            </td>
        </tr>
    </table>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama   = $_POST['nama'];
    $usia   = $_POST['usia'];
    $alamat = $_POST['alamat'];
    $status = $_POST['status'];

    echo "<h3>Data Pendaftaran</h3>";
    echo "Nama : $nama <br>";
    echo "Usia : $usia tahun <br>";
    echo "Alamat : $alamat <br>";
    echo "Status : $status <br>";
}
?>

</body>
</html>
