<?php
include('config.php');

$IDnilai = $_POST["IDnilai"];
$aspek = $_POST["aspek"];
$markah = $_POST["markah"];
$IDHakim = $_POST["IDHakim"]

$sql = "INSERT INTO penilaian (IDnilai, aspek, markahPenuh,IDHakim)
		VALUES ('$IDnilai','$aspek',$markah','$IDHakim')";

$result = mysqli_query($con,$sql);
if($result){
	echo"<script>alert('Maklumat Penilaian berjaya disimpan');
	window.location = 'senarai_nilai.php'</script>";
}else{
	echo"<script>alert('Maklumat Penilaian gagal disimpan');
	window.location = 'MenuAdmin.php'</script>";
}
?>