<?php

require "../config/banco.php";
require "../model/usuario.php";

class usuarioController {
    public function cadastrar($usuarios) {
      $banco = new Banco();
      $bd = $banco->conectar();

      $usuario = new Usuario($bd);
      $usuario->nome = $_POST['nome'];
      $usuario->dataNascimento = $_POST['nascimento'];
      $usuario->email = $_POST['email'];
      $usuario->endereco = $_POST['endereco'];
      $usuario->senha = $_POST['senha'];
         
         var_dump($usuario ->cadastrar());
      }
}