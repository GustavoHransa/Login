<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastro Usuario</title>
</head>
<body>

<?php

if(isset($_POST["usuarios"])){
    require_once "../controller/controleUsuario.php";
    $controllerUsuario = new ControllerUsuario();
    $controllerUsuario->create($_POST["nome"],$_POST["nascimento"],$_POST["email"],$_POST["endereco"],$_POST["senha"]);
}
?>


    <div class="boxCadsusuario">
        <form action="index.php" method="post">
            <form>
                <legend><b>Cadastro de Usuario</b></legend>
                <br>
                <form>
                <div class="inputBox">
                    <label for="nome" class="labelInput">Nome:</label>
                    <input type="text" name="cargo" id="nome" class="inputUser" required>
                  
                </div>
                <br><br> 
            </form>
           
            <form>    
                <div class="inputBox">
                    <label for="email" class="labelInput">E-mail:</label>
                    <input type="text" name="email" id="email" class="inputUser" required>
                    
                
                </div>
                <br><br>
            </form> 
            <form>    
                <div class="inputBox">
                    <label for="endereco" class="labelInput">Endereço:</label>
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    
                
                </div>
                <br><br>
            </form> 
            <form>
                <div class="inputBox">
                    <label for="senha" class="labelInput">Senha:</label>
                    <input type="number" name="senha" id="senha" class="inputUser" required>
                   
                
                </div>
                <br><br> 
            </form>
            <form>
                <label for="nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="nascimento" id="nascimento" required>
                <br><br>
              
            </form>
     
            <input type="submit" name="submit" id="submit">
            
          
        </form>
    </div>


</body>
</html>