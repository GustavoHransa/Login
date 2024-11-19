<?php

require_once '../controller/controleUsuario.php';

$acao = isset ($_GET['acao']) ? $_GET['acao'] : '';

switch($acao)
{

case 'cadastrar':
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $usuarioController = new controleUsuario();
        $usuarioController -> cadastrar ($_POST['nome'],$_POST['nascimento'],$_POST['email'],$_POST['endereco'],$_POST['senha']);
    } else{
        echo "Método de requisição inválido";

    } 
    break;

    default:

        include '../view/cadastroView.php';
    }




?>