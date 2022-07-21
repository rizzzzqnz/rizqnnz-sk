<?php
include('config.php');
include('MenuPeserta.php');

$nokp = $_SESSION['user'];
$nama = $_SESSION['name'];
?>

<?php
//set nilai awal pemboleh ubah
$jumlah = 0;

//dapatkan data daripada XAMPP
$sql = "SELECT * FROM pertandingan WHERE NoKPPeserta = '$nokp' ORDER BY IDnilai ASC";
$data = mysqli_query($con, $sql);
while($rekod = mysqli_fetch_array($data)) {
    $idnilai = $rekod['IDnilai'];
    $markah = $rekod['markah'];

    $jumlah = $jumlah + $markah;

    //masukkan data ke dalam table pertandingan dalam XAMPP
    $sql3 = "UPDATE pertandingan SET jumlah = $jumlah WHERE NOKP = '$nokp'";
    $datakuiz = mysqli_query($con, $sql3);
}

?>

<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="senarai.css">
<body>
<center>
    <h2>Semak Keputusan Pertandingan</h2>
    <h5>No Kad Pengenalan: <?php echo $nokp; ?> &emsp;&emsp;
        Nama: <?php echo $nama; ?>&emsp;&emsp;</h5>
    <h3></h3>

    <!-- papar jadual -->
    <table border='1'>
        <tr>
            <th>Aspek</th>
            <th>Markah</th>
        </tr>

        <?php
        $jumlah = 0;

        $sql = "SELECT * FROM pertandingan
                JOIN peserta ON pertandingan.NoKPPeserta = peserta.NoKPPeserta
                Join penilaian ON pertandingan.IDnilai = penilaian.IDnilai
                JOIN juri ON penilaian.IDjuri = juri.IDjuri
                WHERE pertandingan.NoKPPeserta = '$nokp'";

        $query = mysqli_query($con, $sql);

        while($hasil = mysqli_fetch_array($query)) {
            $jumlah - $hasil['jumlah'];
            ?>
            <tr>
                <td><?php echo $hasil['aspek']; ?></td>
                <td><?php echo $hasil['aspek']; ?></td>
            </tr>
            <?php
        }
        ?>
        <tr>
            <td><b>Jumlah</b></td>
            <td><b><?php echo $jumlah; ?></b></td>
        </tr>
    </table><br>
    <button class="cetak" onclick="window.print()">Cetak</button>
</body>
</center>
</html>