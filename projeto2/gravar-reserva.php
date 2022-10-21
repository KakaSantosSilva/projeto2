<?php
include_once'funcoes.php';
include_once'conexao.php';

?>

<?php

$dia = DataBanco($_POST["dataa"]);
$tempo = $_POST["hora"];
$nome = $_POST["nome1"];
$quarto = $_POST["suitee"];

echo $dia;
echo $tempo;
echo $nome;
echo $quarto;

$sql = "insert into reservas values(null,'".$dia."','".$tempo."','".$nome."','".$quarto."')";

if(mysqli_query($con, $sql))
{
    $msg = "Reserva cadastrada com sucesso!!";
}else{
    $msg = "Desculpe dados inválidos, tente novamente!";
}
mysqli_close($con);

?>
 <script>
                alert(' <?php echo $msg ?> ');
                location.href="reservar.php";
            </script>