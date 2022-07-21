<?php
include('config.php');
include('MenuPeserta.php');

//DAPATKAN ID Pelajar
$nokp = $_SESSION['user'];

//Dapatkan data daripada XAMPP
$pesertaEdit = mysqli_query($con, "SELECT * FROM peserta WHERE NoKPPeserta = $nokp");
while($data = mysqli_fetch_array($pesertaEdit)){
    //papar data dari XAMPP
    $nama = $data['nama'];
    $passwd = $data['kataLaluan'];
    $jantina = $data['jantina'];
    $telefon = $data['telefon'];
}
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="borang.css">
<link rel="stylesheet" href="button.css">

<body><center><h3 class="panjang">KEMASKINI PESERTA</h3>
<main>
    <form class="panjang" action="updatePeserta2.php" method="post">
    <table border="0" align="center" style="font-size: 18px">
        <tr>
            <td>No Kad Pengenalan:</td>
            <td><label><?php echo $nokp; ?></label>
                <input type="hidden" name="nokp" value="<?php echo $nokp; ?>"/></td>
        </tr>

        <tr>
            <td>Nama Peserta:</td>
            <td><input type="text" name="nama" value="<?php echo $nama; ?>" /></td>
        </tr>
[13:26]

[13:26]
logout.php
[13:26]
<?php
    session_start();
    session_destroy();

    header("location:utama.php");
?>