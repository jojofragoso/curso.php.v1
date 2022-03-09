<?php
if(isset($_POST['txt_a']))
{
    $soma = $_POST['txt_a'] + $_POST['txt_b'];

    echo "a soma e:". $soma;

}else
{
    echo "Não foram informados os números para a soma.";
}

?>