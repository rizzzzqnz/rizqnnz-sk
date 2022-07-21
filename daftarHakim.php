<?php
include('config.php');
include('MenuAdmin.php');

//Kira Jumlah soalan dalam senarai
$sql = "SELECT IDjuri FROM juri";
$data = mysqli_query($con, $sql);
$total = mysqli_num_rows($data);
$no = $total +1;
?>

<html>
    <link rel="stylesheet" href="borang.css">
    <link rel="stylesheet" href="button.css">

    <style>
        input[type="text"] {
            width: 200px;
            padding: 5px;
            margin: 5px;
        }
    </style>

    <h3 class="panjang">DAFTAR HAKIM</h3>
    <form action="daftarHakim_insert.php" method="post">
        <table>
            <tr>
                <td>ID Hakim</td>
                <td>
                    <label><?php echo $no; ?></label>
                    <input type="text" value="<?php echo $no;?>" name="IDHakim" hidden>
                </td>
            </tr>

            <tr>
                <td>Nama Hakim</td>
                <td><input type="text" name="NamaHakim"></td>
            </tr>

            <tr>
                <td>Kata Laluan</td>
                <td><input type="text" name="kataLaluanH"></td>
            </tr>

            <tr>
                <td>telefon</td>
                <td><input type="text" name="TelHakim"></td>
            </tr>
        </table>
        <button class="tambah" type="submit">TAMBAH</button>
    </form>
</html>


