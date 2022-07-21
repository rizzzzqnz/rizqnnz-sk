<?php 
include('config.php');
include('MenuAdmin.php');

$query1 = mysqli_query($con,"SELECT * FROM peserta");
while ($row = mysqli_fetch_array($query1)){
	$jumlah = 0;
	$nokp = $row['NoKPPeserta'];

$sql2 = "SELECT * FROM pertandingan
		WHERE NoKPPeserta = '$nokp'
		ORDER BY IDnilai ASC";

$query2 = mysqli_query($con,$sql2);

	while($hasil = mysqli_fetch_array($query2)){
		$markah = $hasil['skor'];
		$jumlah = $jumlah + $markah;
	}
	//masukkan data ke dalam table peserta dalam xampp
	$sql3 = "UPDATE peserta SET Markah = '$jumlah' WHERE NoKPPeserta = '$nokp'";
	$markahpenuh = mysqli_query($con,$sql3);

	//update data ke dalam table pertandingan dalam xampp
	$sql4 = "UPDATE pertandingan SET Markah = '$jumlah' WHERE NoKPPeserta = '$nokp'";
	$updateJumlah = mysqli_query($con,$sql4);
}
?>
<!DOCTYPE html>
<html>
	<link rel="stylesheet" href="senarai.css">

<body>
<center><h2>Keputusan Pertandingan e-mewarna</h2>

<!--papar jadual-->
<table border="1">
	<tr>
		<th>No</th>
		<th>No KP</th>
		<th>Nama</th>
		<th>Markah</th>
	</tr>
<?php
$no = 1;
$querry3 = mysqli_query($con,"SELECT * FROM peserta WHERE NoKPPeserta != '0000' ORDER BY markah DESC ");
while($data = mysqli_fetch_array($querry3)){
	?>
	<tr>
		<td><?php echo $no; ?></td>
		<td><?php $data ['NoKPPeserta'];?></td>
		<td><?php $data ['NamaPeserta'];?></td>
		<td><?php $data ['Markah'];?></td>
	</tr>

<?php
$no++;
}
?>
</table><br>
<button class="cetak" onclick="window.print()">Cetak</button>
</center>
</body>
</html>