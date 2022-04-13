<php?

if ($_POST["enviado"]=="s"){

    $soma = 0;

for ($i=100; $i<=200; $i++)

     if ($i%5==0){
     
     $soma = $soma + $i;{
     echo $i ."<br>";
}
}

    $solucao = "<hr>
            <p>$soma : $soma </p>

";


?>

<form name ="frm" method="POST">


valor:<input type ="txt"  name="valor">

<input type="hidden" name="enviado" value ="s">

<input type="submit" value="caucular" >

</form>