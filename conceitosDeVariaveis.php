<!DOCTYPE html>
<html>
<body>

<?php



$nome = "joeliton";

echo $nome; 
$nome = "barbosa fragoso;<br/>";
echo $nome;

define("teste","este e o valor da constante");

echo teste ."<br/>";


const NOME_CONSTANTE = "essa e outra constante";

echo teste ."<br/>";

echo "estou na linha:". __LINE__."<br/>".PHP_EOL;
echo "estou na linha:" .__DIR__. "<br/>".PHP_EOL;
echo "estou na linha:" .__FILE__ . "<br/>".PHP_EOL;
echo "estou na linha:" .__LINE__ . "<br/>".PHP_EOL;

?>

</body>
</html>