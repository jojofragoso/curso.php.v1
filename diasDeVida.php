<h4> Informe os dados do Cliente: </h4>
  <form action="" name="frm" method="POST">
  nome: <input type = "text" name = "nome">
  data de nascimento: <input type="date" name = "dataNascimento"/>

<input type="hidden" name="enviado" value="s" />
<input type = "submit" value ="caucular">

   </form>

   <?php
    if (isset($_POST["enviado"]) && $_POST["enviado"]=="s") 
    {
        $nome = $_POST['nome'];   
        $data1 = new DateTime( date('Y-m-d') );
        $data2 = new DateTime( $_POST['dataNascimento'] );
        
        $intervalo = $data1->diff( $data2 );
        
        echo "<br/> O {$nome}  tem {$intervalo->y} anos, {$intervalo->m} meses e {$intervalo->d} dias <br/>"; 
        
    }

?>