<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Klinik Kesehatan</title>
</head>
<body>

<h2>Formulir Pendaftaran Klinik Kesehatan</h2>

<form method="post">
<table>
    <tr>
        <td>Nama Pasien</td>
        <td>:</td>
        <td><input type="text" name="nama"></td>
    </tr>

    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><textarea name="alamat"></textarea></td>
    </tr>

    <tr>
        <td>Nomor HP</td>
        <td>:</td>
        <td><input type="text" name="no_hp"></td>
    </tr>

    <tr>
        <td>Usia</td>
        <td>:</td>
        <td><input type="number" name="usia"></td>
    </tr>

    <tr>
        <td>Keluhan</td>
        <td>:</td>
        <td><textarea name="keluhan"></textarea></td>
    </tr>

    <tr>
        <td>Poli Tujuan</td>
        <td>:</td>
        <td>
            <select name="poli">
                <option value="">-- Pilih Poli --</option>
                <option value="Umum">Poli Umum</option>
                <option value="Gigi">Poli Gigi</option>
                <option value="Anak">Poli Anak</option>
                <option value="Kandungan">Poli Kandungan</option>
            </select>
        </td>
    </tr>

    <tr>
        <td>Nama Dokter</td>
        <td>:</td>
        <td><input type="text" name="dokter"></td>
    </tr>

    <tr>
        <td colspan="3">
            <input type="submit" value="Daftar">
            <input type="reset" value="Batal">
        </td>
    </tr>
</table>
</form>

</body>
</html>
