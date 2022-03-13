<?php



$a = $_POST ["txt_a"];
$b = $_POST ["txt_b"];
$c = $_POST ["txt_c"];


    function caucularMedia ($nota1, $nota2, $nota3)
    {
       $media = ($nota1 + $nota2 + $nota3)/3;
       return $media;
    }

echo "media ingual a " .caucularMedia($a,$b,$c);


?>