<?php
    session_start();

    $servername = 'localhost';
    $bdname = 'login';
    $username = 'root';
    $password = '';
   

        $conexao = new mysqli($servername,$username,$password,$bdname);

        
        if($conexao -> connect_error){
            die("Erro no banco de dados :" .$conexao ->conect_error);
        }
 
?>