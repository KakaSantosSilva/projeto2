<?php
    
     session_start();

     if(!isset($_SESSION["nome"]))
     {
        session_destroy();
        $msg = "<span class='red-text'>Acesso Negado</span>";
        header("location:index.php?msg=".$msg);

     }elseif($_SESSION["tempo"]+ 5*60 < time()){

        $msg = "Sessão expirada";
        header("location:index.php?msg =".$msg);

     }else{
        
        $_SESSION["tempo"] = time();


     };

    ?>