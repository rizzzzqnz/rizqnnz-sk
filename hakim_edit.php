<?php 
include('config.php');
include('menuadmin.php');
?>

<?php
if (isset($_POST['update'])){
  $IDHakim = $_POST['IDHakim'];
  $NamaPeserta = $_POST['NamaHakim'];
  $KataLaluanH = $_POST['KataLaluanH'];
  $TelHakim = $_POST['TelHakim'];

//KEMASKINI DATA DALAM JADUAL XAMPP
$update = "UPDATE hakim SET IDHakim = '$IDHakim', NamaHakim = '$NamaHakim', KataLaluanH = '$KataLaluanH', 
        TelHakim = '$TelHakim' WHERE IDHakim = '$IDHakim'";
$result = mysqli_query($con,$update);

//papar mesej jika rekod berjaya dikemaskini
echo "<script>alert('kemaskini rekod hakim berjaya');
      window.location='senarai_hakim.php'</script>";
}
?>

<?php
//DAPATKAN ID HAKIM
$hakimedit = $_GET['IDHakim'];
$sql = mysqli_query($con, "SELECT * FROM juri WHERE IDjuri  = '$hakimedit'");
while($hasil = mysqli_fetch_array($sql)){
  //papar data dari XAMPP
  $IDHakim=$hasil['IDjuri'];
  $NamaHakim=$hasil['NamaHakim'];
  $KataLaluanH=$hasil['KataLaluanH'];
  $TelHakim=$hasil['TelHakim'];
}
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="borang.css">
<link rel="stylesheet" href="button.css">
<body><center><h3 class="panjang">KEMASKINI MAKLUMAT</h3>
<main>
<form class="panjang" method="post">
<table border="0" align="center" style="font-size: 18px">
  <tr>
    <td>ID Hakim:</td>
    <td></label><?php echo $hakimedit; ?></label></td>
    </td><input type="hidden" name="IDHakim" value="<?php echo $hakimedit; ?>"/></tr>
  </tr>
  <tr>
    <td>Nama Hakim:</td>
    <td?><input type="text" name="passwd" value="<?php echo $NamaHakim; ?>"/></td?>
  </tr>
  <tr>
    <td>Kata Laluan:</td>
    <td><input type="text" name="KataLaluanH" value="<?php echo $KataLaluanH; ?>"/></td>
  </tr>
  <tr>
    <td>Telefon: </td>
    <td><input type="text" name="TelHakim" value="<?php echo $TelHakim; ?>"/></td>
  </tr>

</table>
<button type="submit" name="update">Update</button>
<button type="submit" name="cancel" onclick="history.back()">Batal</button>
</form>
</main>
</center>
</body>
</html>