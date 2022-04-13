<?php

if ($_POST ["enviado"]=="s"){



$i = 1; $quant = 0;
$valor = $_POST["valor"];

while($i <=$valor){

   
     if($valor & $i ==0)
      $quant++;

      $i++;
}

if($quant<=2)
   $rea = "o numero $valor e primo";
else  
   $rea = "o numero $valor nao e primo";

$solucao = "<hr>
           <p>resultado : $rea </p>
";
}

?>

<form name = "frm" method="post">

valor: <inputy type = "text" name ="valor" >



<input type="hidden" name = "enviado" value="s">
<input type="submit" value = caucular>

<hr>

<?php
 
echo $solucao;



?>