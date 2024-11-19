<?php
require_once "../service/login.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1 >Login</h1>
    <form action="login.php" method="POST">
        Email :<input type="text" name="email" placeholder="Email" required>
        <br><br>
        Senha:<input type="password" name="senha" placeholder="Senha"required>
        <br><br>
        <a class="link" href="cadastroView.php">Não tem cadastro ? Clique aqui</a></p>
        <input type="submit" name="submit" value="Enviar">
    </form>
    
    
</body>
</html>