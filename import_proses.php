<?php
include('config.php');
include('MenuAdmin');

	$fai = fopen("data,txt","r");
	while(!feof($fail)){
		$medan = explode(',',fgets($fai));

		$nokp = $medan[0];
		$nama= $medan[1];
		$pwd = $medan[2];
		$jantina = $medan[3];
		$telefon = $medan[4];
		$status = $medan[5];
		$markah = $medan[6];

		$sql = "INSERT INTO peserta(NOKP,nama,KataLaluan,jantina,telefon,status,markah)
			VALUES('$nokp','$nama','$pwd','$jantina','$telefon','$status','$markah')";

		$hasil = mysqli_query($con,$sql);

		if($hasil){
			echo"<script>alert('Rekod tidak berjaya di import');</script>";
		}else{
			echo"<script>alert('Rekod tidak berjaya diimport');</script>";
		}
		mysql_close($con);
?>
<html>
<link rel="stylesheet" href="senarai.css">
<center>
<table>
	<caption>MAKLUMAT PESERTA</caption>
	<tr>
		<th>No KP</th>
		<th>Nama</th>
		<th>Kata Laluan</th>
		<th>Jantina</th>
		<th>Telefon</th>
		<th>Status</th>
		<th>Markah</th>
	</tr>
	<tr>
		<td><?php echo $nokp ?></td>
		<td><?php echo $nama ?></td>
		<td><?php echo $pwd ?></td>
		<td><?php echo $jantina ?></td>
		<td><?php echo $telefon ?></td>
		<td><?php echo $status ?></td>
		<td><?php echo $markah ?></td>
	</tr>
<?php } ?>
</table>
</center>
</html>