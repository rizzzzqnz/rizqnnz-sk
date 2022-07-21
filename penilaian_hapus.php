<?php
require('config.php');
include('menuHakim');

//dapatkan noKP yang hendak dipadam
$id = $_GET['nokp'];

//Padam soalan dalam XAMPP
$padam= mysqli_query($con, "DELETE FROM pertandingan WHERE NOKP = '$id'");

//papar mesej jika rekod berjaya dipadam
echo "<scipt>alert('Hapus penilaian berjaya');
			 window.location = 'senarai_penilaian.php'</script>";
?>