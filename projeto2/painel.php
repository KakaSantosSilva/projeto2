<?php
  include_once'autenticacao.php';

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
<section class="container">
      
      <div id="painel">
  
        <h3>O que deseja fazer <?php echo $_SESSION["nome"]?> </h3>
        <h4>Menu</h4>
  
        
  
        <?php
          if($_SESSION["perfil"]=="administrador")
          {
              include_once'menus/menu-adm.php';
      
          }elseif($_SESSION["perfil"]=="usuario"){
  
              include_once'menus/menu-user.php';
          }
  
         ?>
  
      </div>
  
  
  
  
      </section>
</body>
</html>