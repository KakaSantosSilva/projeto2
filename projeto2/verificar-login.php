<?php

session_start();

$login = $_POST["login"];
$senha = md5($_POST["senha"]);

$con = mysqli_connect("localhost","root","","sistema");

$sql = "select *  from cliente where login = '".$login."' and senha = '".$senha."'";

$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result) == 1){

   $row = mysqli_fetch_array($result);


   $_SESSION["nome"] = $row["nome"];
   $_SESSION["perfil"] = $row["perfil"];
   $_SESSION["tempo"] = time();

   header("location:painel.php");


}else{
    $msg = "Login/Senha inválidos" ;
    header("location:index.php?msg=".$msg);

}

mysqli_close($con)


?>
