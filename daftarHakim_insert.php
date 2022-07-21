<?php
include('config.php');

$IDHakim  = $_POST["IDHakim"];
$NamaHakim = $_POST["NamaHakim"];
$KataLaluanH = $_POST["kataLaluanH"];
$TelHakim = $_POST["TelHakim"];

$sql = "INSERT INTO juri (IDjuri,NamaJuri,kataLaluanH,TelJuri)
  VALUES ('$IDHakim','$NamaHakim','$KataLaluanH','$TelHakim')";

$result = mysqli_query($con,$sql);
if($result){
  echo"<script>alert('Pendaftaran Hakim Berjaya');
  window.location = 'senarai_hakim.php'</script";
}else{
  echo"<script>alert('Pendaftaran Hakim Gagal');
  window.location = 'menuadmin.php'</script";

}
?>