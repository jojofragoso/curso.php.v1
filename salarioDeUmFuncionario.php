<?php

if ($_POST ["enviado"]=="s"){



$nome = $_POST["nome"];
$idade = $_POST["idade"];
$cargo = $_POST["cargo"];
$salario = $_POST["salario"];

$reajuste = 0.38 * $salario;
$gratificacao = 0.20 * $salario;

$salarioTotal = $salario + $reajuste +$gratificacao;

$salaioLiquido = $salarioTotal - 0.15 * $salarioTotal;




$solucao= "<p>nome: $nome </p>
<p>idade: $idade </p>
<p>cargo: $cargo </p>
<p>salario bruto: $salarioTotal  </p>
<p>salario liquido: $salarioLiquido </p> ";

}

?>

<form name = "frm" method="post">

nome: <input type = "text" name = "nome" >
idade: <input type = "text" name = "idade" >
cargo: <input type = "text" name = "cargo" >
salario: <input type = "text" name = "salario" >


<input type="hidden" name = "enviado" value="s">
<input type="submit" value = caucular>

<hr>

<?php
 
echo $solucao



?>
















