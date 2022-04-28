<?php

if(isset($_POST ["enviado"]) && $_POST ["enviado"] == 1 ){

$num_anterior = 0;
$num_atual = 1;
$novo_numero = 0;

$rea = "1";
for ($i=1;$i<=15;$i++){
     $novo_numero =  $num_atual + $num_anterior;
     $num_anterior = $num_atual;
     $num_atual = $novo_numero;
     $rea .=  " ". $novo_numero;
}

     $soluçao ="<hr>
             <p> resultado : $rea </p>
             ";
}
?>
<form name = "frm" method="post">

valor1:<input type ="txt"  name="txt_valor1" size ="30"> </br>
<input type="submit" value = "enviar" name="btn_Enviar">


</form>