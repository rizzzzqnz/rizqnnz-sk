<?php
include('config.php');

if(isset($_POST['nokp'])) {
    $NOKP = $_POST["nokp"];
    $nama = $_POST["peserta"];
    $Katalaluan = $_POST["passwd"];
    $telefon = $_POST["telefon"];

    $sql = "INSERT INTO peserta(NoKPPeserta, NamaPeserta, TelPeserta, katalaluan)
            VALUES ('$NOKP', '$nama', '$telefon', '$Katalaluan')";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "<script>alert('Berjaya Signup'); window.location = 'login.php'</script>";
    }
    else {
        echo "<script>alert('Gagal Signup'); window.location = 'utama.html'</script>";
    }
}
?>