<form action="" method="POST">


valor1:<input type ="txt"  name="valor1">
valor2:<input type ="txt"  name="valor2"> 

<input type="hidden" name="enviado" value ="1">

<input type="submit" value="caucular" >

   

<?php

if(isset($_POST ["enviado"]) && $_POST ["enviado"] == 1 )
 { 
 
     $valor1 = $_POST["valor1"];
     $valor2 = $_POST["valor2"];
     
 if ($valor1 > $valor2)
     $rea = "valor 1 maior ";

 else 
     $rea  = "valor 2 maior ";


 echo  "<hr><p>nome: $rea </p>";
 
 }

?>

