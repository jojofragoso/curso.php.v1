<?php

if(isset($_POST["enviado"]) && $_POST ["enviado"] == 1 )
{ 
 
    $nome = $_POST["nome"];
    $depedentes = $_POST["depedentes"];
    $rendaBruta = $_POST["rendaBruta"];

    $salarioLiquido = ($rendaBruta - 600) + ((($depedentes*5)*$rendaBruta)/100);
    $salarioLiquido = ($rendaBruta - 600) + ((($depedentes*5)/100) * $rendaBruta); 
    if($rendaBruta <= 1000) 
    {
        $ir =0;
    }elseif($salarioLiquido > 1000 && $salarioLiquido <= 10000)
    {
        $ir =0.05 * $salarioLiquido;

    }elseif(($salarioLiquido > 30000) && ( $salarioLiquido <= 60000))
    {          
        $ir =0.10 * $salarioLiquido;     
    }else
    {
        $ir =0.15 * $salarioLiquido;
    }


 echo  "<hr>
 <p>nome  $nome </p>
 <p>depedentes: $depedentes </p>
 <p>rendaBruta: $rendaBruta Bruta </p>
 <p>Salario Liquido: $salarioLiquido </p>
 <p> Imposto de Renda: $ir </p>

 ";

}

?>


<form action="" method="POST">

nome:<input type ="txt"  name="nome">
depedentes:<input type ="txt"  name="depedentes">
renda Bruta:<input type ="txt"  name="rendaBruta"> 

 


<input type="hidden" name="enviado" value ="1">

<input type="submit" value="caucular" >
