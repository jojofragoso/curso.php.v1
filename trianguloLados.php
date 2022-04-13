<form action="" method="POST">

lado 1:<input type ="txt"  name="lado1">
lado 2:<input type ="txt"  name="lado2"> 
lado 3:<input type ="txt"  name="lado3">



<input type="hidden" name="enviado" value ="1">

<input type="submit" value="caucular" >

<?php

if(isset($_POST ["enviado"]) && $_POST ["enviado"] == 1 )
 { 
 
    
     $lado1 = $_POST["lado1"];
     $lado2 = $_POST["lado2"];
     $lado3 = $_POST["lado3"];
     
 if (($lado1<$lado2+$lado3) && ($lado2<$lado1+$lado3) && ($lado3<$lado1+$lado2))
 
     if (($lado1==$lado2) && $lado2==$lado3)
        $res = "e um tiangulo equilatero";

 else if (($lado1 !=$lado2) && ($lado2 !=$lado3) ($lado1 !=$lado3))
     $res = "e um triangulo escaleno";     
     
else 
     $res = "e uma triangulo isosceles";

 else 
     $res = "nao e triangulo";

 
 
 echo  "<hr>
 <p>nome : $rea </p>
 <p>lado 1: $rea </p>
 <p>lado 2: $rea </p>
 <p>lado 3 : $rea </p>
 <p>resultado: $rea </p>
 ";

 }

?>
   