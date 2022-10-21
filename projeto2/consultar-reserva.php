<?php   
    include_once'conexao.php'


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h3>Consultar Reserva</h3>

    <form action="" method="post" autocomplet="off">
        <input type="text" name="nome" placeholder="Digite para pesquisar!">
        <input type="submit" value="Pesquisar" class="btn pink" >
    </form>
</div>
<?php
        $nome = $_POST["nome"];
        //echo "O cliente digitado foi: " . $nome;
        //instrução
       $sql = "select reservas.dia, reservas.hora, cliente.nome, cliente.cpf, hoteis.nome_hotel, acomodacoes.suites 
        from reservas,cliente,hoteis,acomodacoes
        WHERE
        cliente.id_cli = reservas.id_cli and 
        reservas.id_acomod = acomodacoes.id_acomod AND
        acomodacoes.id_hotel = hoteis.id_hotel and cliente.nome like '".$nome."%'" ;


        $result = mysqli_query($con, $sql);
        if(mysqli_num_rows($result) > 0)
        {
           // echo "ok!!!";
           ?>
           <table class= "" >
                <tr>
                
                    <th>dia</th>
                    <th>Horário</th>
                    <th>Nome</th>
                    <th>Hotel/Suite</th>
                     
                </tr>
                <?php
                    //encanto/while
                    while($row = mysqli_fetch_array($result))
                    {
                        ?>
                        <tr>
                           
                            <td><?php echo $row["dia"]; ?></td>
                            <td><?php echo $row["hora"]; ?></td>
                            <td><?php echo $row["nome"]; ?></td>
                            <td><?php echo $row["cpf"]; ?></td>
                            <td><?php echo $row["nome_hotel"]; ?></td>
                            <td><?php echo $row["suites"]; ?></td>

                          
                        </tr>
                        
                    <?php
                    } //fim do loop 
                    ?>
           </table>

<?php
        }

    
    else
    {
        echo "Nenhuma Reserva encontrada!!";
    }
    mysqli_close($con);


?>
</body>
</html>