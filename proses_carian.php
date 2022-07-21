<?php
include('config.php');
include('MenuAdmin');

$nama = $_POST['nama'];

//membuat query untuk dapatkan data
$sql1 = mysqli_query($sql1)){
$no = 1;
while($row=mysqli_fetch_array($sql1)){
	$peserta = $row['nama'];
	$nokp = $row['NOKP'];
	$markah = $row['markah'];
}
?>

<htm>
<link rel="stylesheet" href="senarai.css">
<center>
<h2>Keputusan Individu</h2>
<h5>No Kad Pengenalan: <?php echo $peserta; ?>&emsp;&emsp;
	Nama; <?php echo $peserta; ?>&emsp;&emsp;</h5>

<!--papar tajuk jadual-->
<table border="1">
<tr>
	<tg>Aspek</th>
	<th>Markah</th>
</th>

<?php
	$sql2 = "SELECT * FROM pertandingan
		JOIN peserta ON pertandingan.NOKP = peserta.NOKP
		JOIN penilaian ON pertandingan.IDnilai = penilaian.IDnilai
		JOIN hakim ON penilaian.IDhakim = hakim.IDhakim
		WHERE pertandingan.NOKP ='$nokp'";

$query = mysqli_query($con,$sql12);

while($hasil = mysqli_fetch_array($query)){
?>
	<tr>
		<td><?php echo $hasil['aspek']; ?></td>
		<td><?php echo $hasil['skor']; ?></td>
	</tr>
<?php
}
?>
<tr>
	<td><b>Jumlah</b></td>
	<td><?php echo $markah; ?></td></tr>
</th>
</table><br>
<button class="cetak" onclick="window.print()">Cetak</button>
</body>
</center>
</html>