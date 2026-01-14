<!DOCTYPE html>
<html>
<head>
    <title>Formulir Service Motor</title>
</head>
<body>

<h2>Formulir Service Motor</h2>

<form method="post">
<table>
    <tr>
        <td>Nama Pelanggan</td>
        <td>:</td>
        <td><input type="text" name="nama"></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><textarea name="alamat"></textarea></td>
    </tr>
    <tr>
        <td>No HP</td>
        <td>:</td>
        <td><input type="text" name="no_hp"></td>
    </tr>
    <tr>
        <td>Merk Motor</td>
        <td>:</td>
        <td>
            <select name="merk">
                <option value="">-- Pilih Merk --</option>
                <option value="Honda">Honda</option>
                <option value="Yamaha">Yamaha</option>
                <option value="Suzuki">Suzuki</option>
                <option value="Kawasaki">Kawasaki</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Kendala Motor</td>
        <td>:</td>
        <td><textarea name="kendala"></textarea></td>
    </tr>
    <tr>
        <td colspan="3">
            <input type="submit" value="Kirim">
        </td>
    </tr>
</table>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h3>Data Service Motor</h3>";
    echo "Nama : " . $_POST['nama'] . "<br>";
    echo "Alamat : " . $_POST['alamat'] . "<br>";
    echo "No HP : " . $_POST['no_hp'] . "<br>";
    echo "Merk Motor : " . $_POST['merk'] . "<br>";
    echo "Kendala : " . $_POST['kendala'] . "<br>";
}
?>

</body>
</html>
