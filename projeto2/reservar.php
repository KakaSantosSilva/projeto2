<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <fieldset>
    <form action="gravar-reserva.php" method="post">
   
    <label>Data: </label><input type="date" name="dataa">
    <label>Horário: </label><input type="time" name="hora">
    <label>Nome: </label><select name="nome1" id="nome1">
            
            <?php
                  $sql  = "select * from cliente  ";
                  include_once 'conexao.php';
                  $result = mysqli_query($con, $sql);

                  if(mysqli_num_rows($result) > 0){
                      
                      while($row = mysqli_fetch_array($result)){
                          ?>
                          <option value="<?php echo $row["id_cli"]; ?>"><?php echo $row["nome"]; ?></option>
                          <?php
                      }
                  } 
                  
                  
              ?>
       </select>

            <select name="suitee" id="suitee">
            <?php
$sql  = "select hoteis.nome_hotel, acomodacoes.id_acomod, acomodacoes.suites from acomodacoes,hoteis where hoteis.id_hotel = acomodacoes.id_hotel ";
include_once 'conexao.php';

$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result) > 0){
    
    while($row = mysqli_fetch_array($result)){
        ?>
        <option value="<?php echo $row["id_acomod"]; ?>"><?php echo $row["nome_hotel"]," - ",$row["suites"]; ?></option>
        <?php
    }
}


?>

                
           
                </select>
            
           
        
            <br>
            <!-- o meu button esta baixo-->
            <input type="submit" value="Enviar" class="btn">

                  
    </form>
    </fieldset>
</body>
</html>