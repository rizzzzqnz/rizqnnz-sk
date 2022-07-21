<?php
require('config.php');
include('MenuAdmin.php');

//dapatkan noKP yang hendak dipadam
$id = $_GET['nokp'];

//Padam soalan dalam xampp
$padam = mysqli_query($con,"DELETE FROM peserta WHERE NOKP = '$id'");

//papapr mesej jika rekod berjaya dipadam
echo "<script>alert('Hapus peserta berjaya');
			window.location = 'senarai_peserta.php'</script>";
?>
		