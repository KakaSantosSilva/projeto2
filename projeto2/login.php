<section class="container">
       <div class="caixa">
      <h3>Login</h3>
      <form action="verificar-login.php" method="post">
        <div id="nome">
         <label>Usuario: </label><input type="text" name="login" required ><br>
         </div>
         <div id="senha">
         <label>Senha: </label><input type="password" name="senha" required ><br>
         </div>
        <div id="botao">
         <input type="submit" value="Entrar" class="btn">
         </div>
      </form>

       
       <br>
       <?php
       
       if(isset($_GET["msg"])){

              echo$_GET["msg"];
       }


       
       ?>


       </div> 
  

    </div>
  
       
    

    </section>