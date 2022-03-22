<form action="" method="POST">

nome:<input type ="txt"  name="nome">
nota 1:<input type ="txt"  name="nota1">
nota 2:<input type ="txt"  name="nota2"> 
nota 3:<input type ="txt"  name="nota3">
nota 4:<input type ="txt"  name="nota4"> 


<input type="hidden" name="enviado" value ="1">

<input type="submit" value="caucular" >

   

<?php

if(isset($_POST ["enviado"]) && $_POST ["enviado"] == 1 )
 { 
 
     $nome = $_POST["nome"];
     $nota1 = $_POST["nota1"];
     $nota2 = $_POST["nota2"];
     $nota3 = $_POST["nota3"];
     $nota4 = $_POST["nota4"];

     $media = ($nota1 + $nota2 + $nota3 + $nota4)/4;

     
 if ($media > 7)
     $rea = "aprovado com  $media";

 else 
     $rea  = "reprovado com $media";


 echo  "<hr>
 <p>nome : $rea </p>
 <p>nota 1: $rea </p>
 <p>nota 2: $rea </p>
 <p>nota 3 : $rea </p>
 <p>nota 4: $rea </p>
 <p>resultado: $rea </p>
 ";

 }

?>