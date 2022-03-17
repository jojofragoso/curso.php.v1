
<form action="" name = "frm" method="post">

nome: <input type = "text" name = "nome">
horas: <input type = "text" name = "horas">
depedentes: <input type = "text" name = "depedentes">


<input type="hidden" name = "enviado" value="1">
<input type="submit" value = caucular>
</form>
   
<?php
 
 if ($_POST ["enviado"] == 1 )
 { 
 
     $nome = $_POST["nome"];
     $horas = $_POST["horas"];
     $depedentes = $_POST["depedentes"];
 
    $salarioBruto = 12 * $horas + 40 * $depedentes;
    $inss = 0.85 * $salarioBruto;
    $ir = 0.05 * $salarioBruto;
    $salarioLiquido = $salarioBruto - $inss - $ir;
 
    $solucao="<hr><p>nome: $nome </p>
    <p>salario bruto: $salarioBruto </p>
    <p>inss: $inss </p>
    <p>ir: $ir </P>
    <p>liquido: $salarioLiquido </p>
    ";

 echo $solucao;
 
 }


 ?>
