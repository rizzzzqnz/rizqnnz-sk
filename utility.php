<html>
<style>
    div{
        background: #e041be;
    }
    p{
        font-size: 16px;
        font-weight: bold;
        font-family: garamond;
        color: aliceblue;
    }
    label{
        color: white;
    }
</style>
<center>
<div>
<p>#Utiliti Pengguna#</p>
<center>
<label>Tukar warna Font</label><br>
<button id="color">Warna Font</button><br><br>
<label>Tukar warna latar</label>
<?php include("tukar_warna.php") ?>
</center><br>
</div>

<script>
    document.getElementById('color').onclick = changeColor;
    var currentColor = "red";

    function changeColor(){
        if (currentColor == "red"){
            document.body.style.color = "blue";
            currentColor = "blue";
        } else {
            document.body.style.color = "red";
            currentColor = "red";
        }
    }
</script>
</html>