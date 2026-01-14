<html>
    <head><title>Tugass Strig dan Tanggal</title></head>
    <body>
        <form>
            Masukkan Nama, Email dan Pasword <br>
            Default Nama = belajar, Email = test@gmail.com dan Password = Madiun <br>
            Isian data :<br>
            Nama :<INPUT TYPE=TEXT NAME=password><br>
            Email :<INPUT TYPE=TEXT NAME=email><br>
            Paaword :<INPUT TYPE=PASSWORD NAME=password><br>
                <INPUT TYPE=SUBMIT VALUE="Cek"><br>
        </form>

        <?php
        <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama     = $_POST['nama'];
    $email    = $_POST['email'];
    $password = $_POST['password'];

    // CEK EMAIL
    if (empty($email)) {
        echo "Harap mengisi email <br>";
    } else {
        if ($email == "test@gmail.com") {
            echo "Alamat email $email valid <br>";
        } else {
            echo "Alamat email $email tidak valid <br>";
        }
    }
    // CEK PASSWORD
    $default_nama = "belajar";
    $password_valid = "madiun";

    $hash_valid = crypt($password_valid, $default_nama);
    $hash_input = crypt($password, $default_nama);

    if ($hash_valid === $hash_input) {
        echo "Password valid";
    } else {
        echo "Password salah";
    }
}
?>

    </body>
</html>