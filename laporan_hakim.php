<?php
include('config.php');
include('MenuAdmin');

$idHakim= $_POST['idhakim'];
$query = mysqli_query($con, "SELECT * namaHakim FROM hakim
							 WHERE IDhakim = '$idhakim'");
$hasil = mysqli_fetch_array($query);
$hakim = $hasil['namaHakim'];
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="senarai.css">
	<link rel="stylesheet" href="button.css">
</head>
<center>
<body>
<h3>PENILAIAN MENGIKUT HAKIM</h3>
<h4>Hakim: <?php echo $hakim; ?></h4>
<table>
	<tr>
		<th>Bil</th>
		<th>No KP</th>
		<th>Nama Peserta</th>
		<th>Skor</th>
	</tr>

<?php
$bil =1;
$sql = "SELECT * FROM pertandingan
		JOIN peserta ON pertandingan.NOKP = peserta.NOKP
		JOIN penilaian ON pertandingan.IDnilai = penilaian.IDnilai
		JOIN hakim ON pertandingan.IDhakim = hakim.IDhakim
		WHERE pertandingan.IDhakim = '".$idhakim."'";

$query = mysqli_query($con,$sql);

while ($row = mysqli_fetch_array($query)){
	?>
	<tr>
		<td><?php echo $bil; ?></td>
		<td><?php echo $row['NOKP']; ?></td>
		<td><?php echo $row['nama']; ?></td>
		<td><?php echo $row['skor']; ?></td>
	</tr>
	<?php
	$bil = $bil+1;
    }
    ?>
</table><br>
<button class="cetak" onclick="window.print()">Cetak</button>
</body>
</center>
</html>