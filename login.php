<?php
require('config.php');
session_start();

if (isset($_POST['nokp'])) {
    //Masukkan pemboleh ubah dari interface ke dalam pemboleh ubah php
    $nokp = $_POST['nokp'];
    $passwd = $_POST['passwd'];

    //cari maklumat dalam table pelajar dalam XAMPP
    $sql = "SELECT * FROM peserta WHERE NoKPPeserta = '$nokp' and Katalaluan = '$passwd'";
    $rekod = mysqli_query($con, $sql);
    while ($hasil = mysqli_fetch_array($rekod)) {
        $_SESSION['user'] = $hasil['NoKPPeserta'];
        $_SESSION['name'] = $hasil['NamaPeserta'];
        $status = $hasil['status'];
        $id = $hasil['NoKPPeserta'];
        $pass = $hasil['Katalaluan'];

        if ($status == 'ADMIN') {
            echo "<script>alert('LOG MASUK SEBAGAI PENTADBIR BERJAYA'); window.location = 'MenuAdmin.php'</script>";
        } else {
            echo "<script>alert('LOG MASUK SEBAGAI PESERTA BERJAYA'); window.location = 'MenuPeserta.php'</script>";
        }
    }

    if ($nokp != $id or $passwd != $pass) {
        echo "<script>alert('LOG MASUK GAGAL'); window.location = 'login.php'</script>";
    }
}
?>

<!------------------ INTERFACE ------------------>
<html>
<link rel="stylesheet" href="borang.css">
<link rel="stylesheet" href="button.css">
<style>
    body {
        background-image: url(lawa.jpg);
    }
</style>

<body>
    <center>
        <img src="nezuko.gif"><br>
    </center>
    <h3 class="pendek">LOG MASUK PESERTA</h3>
    <form class="pendek" method="POST">
        <table border="0">
[16:24]
<tr>
                <td>No Kad Pengenalan</td>
                <td><input type="text" name="nokp" style="width: 150px;" required></td>
            </tr>
            <tr>
                <td>Kata Laluan</td>
                <td><input type="password" name="passwd" style="width: 150px;" required></td>
            </tr>
        </table>
        <button class="login" type="submit">Login</button>
        <button class="signup" type="button" onclick="window.location='signup.html'">Sign Up</button>
    </form>
    </center>
</body>

</html>