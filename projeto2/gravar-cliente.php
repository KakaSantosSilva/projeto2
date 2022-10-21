<?php
include_once'funcoes.php'

?>

<?php
      
      $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $dtnasc = dataBanco($_POST["dtnasc"]);

        $con = mysqli_connect("localhost", "root", "", "cadastro");

        $sql = "insert into cliente values(null, '".$nome."', '".$cpf."','".$email."', '".$telefone."', '".$dtnasc."')";

        if(mysqli_query($con, $sql))
        {
            $msg = "Dados gravados com sucesso!!!";
        }
        else
        {
            $msg = "Erro ao gravar os dados no banco!!";
        }
        //fechar a conexão
        mysqli_close($con);

      
    ?>
    <script>
    alert('<?php  echo $msg; ?>');
    location.href = "registrar-cliente.php";
     </script>


    </section>