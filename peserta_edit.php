<?php 
include('config.php');
include('menuadmin.php');

if(isset($_POST['update'])){
  $NOKPPeserta = $_POST['NOKPPeserta'];
  $NamaPeserta = $_POST['NamaPeserta'];
  $KataLaluan = $_POST['KataLaluan'];
  $Jantina = $_POST['Jantina'];
  $TelPeserta = $_POST['TelPeserta'];

//KEMASKINI DATA DALAM XAMPP
$update = "UPDATE peserta SET NOKPPeserta = '$NOKPPeserta',NamaPeserta = '$NOKPPeserta', kataLaluan = '$KataLaluan',
        Jantina = '$Jantina',TelPeserta = '$Telpeserta' WHERE NOKPPeserta = '$NOKPPeserta'";
$result = mysqli_query($con,$update);

//papar mesej jika rekod berjaya dikemaskini
echo "<script>alert('kemaskini maklumat peserta berjaya');
        window.location = 'senarai_peserta.php'</script>";
}
?>

<?php 
//DAPATKAN ID PESERTA
$pesertaEdit = $_GET['NOKPPeserta'];
$sql = mysqli_query($con,"SELECT * FROM peserta WHERE NOKPPeserta = $pesertaEdit");
while($hasil=mysqli_fetch_array($sql)){
  //papar data dari XAMPP
  $NOKPPeserta = $hasil['NOKPPeserta'];
  $NamaPeserta = $hasil['NamaPeserta'];
  $KataLaluan = $hasil['KataLaluan'];
  $Jantina = $hasil['Jantina'];
  $TelPeserta = $hasil['TelPeserta'];
}
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="borang.css">
<link rel="stykesheet" href="button.css">

<body><center><h3 class="panjang">KEMASKINI MAKLUMAT PESERTA</h3>
<main>
<form class="panjang" method="post">
<table border="0" align="center" style="font-size: 18px">
  <tr>
    <td>No Kad Pengenalan:</td>
    <td><labe><?php echo $pesertaEdit; ?></label></td>
    <td><input type="hidden" name="NOKPPeserta" value="<?php echo $pesertaEdit; ?>"/></td>
  </td>
  <tr>
    <td>Nama Peserta:</td>
    <td><input type="text" name="nama" value="<?php echo $nama; ?>"/></td>
  </tr>
  <tr>
    <td>Kata Laluan:</td>
    <td><input type="text" name="passwd" value="<?php echo $passwd; ?>"/></td>
  </tr>
  <tr>
    <td>Jantina:</td>
    <td><input type="text" name="Jantina" value="<?php echo $Jantina; ?>"/></td>
  </tr>
  <tr>
    <td>Telefon:</td>
    <td><input type="text" name="telefon" value="<?php echo $Telefon: ?>"/></td>
  </tr>
</table>
<button type="submit" name="update">Update</button>
<button type="submit" name="cancel" onclick="history.back()">Batal</button>
</form>
</main>
</center>
</body>
</html>