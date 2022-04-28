<?php

if(isset($_POST ["enviado"]) && $_POST ["enviado"] == 1 ){

$total = $_POST["areaTotal"];
$construida = $_POST["areaconstruida"];

$naoConstruida = $total - $construida;

$valor = ($construida * 5) + ($naoConstruida  * 3.8);
    



     $soluçao ="<hr>
             <p>Resultado : $rea </p>
             ";
}
?>

<form action=.php" method="POST">

area total:<input type ="txt"  name="areaTotal"> </br>
area construida:<input type ="txt"  name="areaconstruida" > </br>

<input type="submit" value = "enviar" name="btn_Enviar">

</form>