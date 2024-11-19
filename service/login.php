<?php
    session_start();

    require_once "../config/banco.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        $email = $_POST['email'];
        $senha = $_POST['senha'];

    }

    $sql = "SELECT * FROM usuarios WHERE email = ?";

    $stmt = $conexao->prepare($sql);
    $stmt ->bind_param("ss", $email);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows == 1) {

        $row - $result->fetch_assoc();

        if (password_verify($password, $row ['password'])){

            $_SESSION ["loggedin"] =  true;

            header("location:index.php");
            exit;

        }

    }
    else{

        $error = "Usuario ou senha incorretos ";

    }
    
