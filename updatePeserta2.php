<?php
include('config.php');
include('MenuPeserta.php');
?>

<?php
if (isset($_POST['update'])) {
    $nokp = $data['nokp'];
    $nama = $data['nama'];
    $passwd = $data['passwd'];
    $jantina = $data['jantina'];
    $telefon = $data['telefon'];

    //KEMASKINI DATA DALAM JADUAL XAMPP
    $update = "UPDATE peserta SET nama = '$nama', kataLaluan = '$passwd', jantina = '$jantina', telefon = '$telefon' WHERE NOKP = '$nokp'";
    $result = mysqli_query($con, $update);

    //papar mesej jika rekod berjaya dikemaskini
    echo"<script>alert('Kemaskini peserta berjaya');
            window.location = 'infoPeserta.php'</script>";
}
?>