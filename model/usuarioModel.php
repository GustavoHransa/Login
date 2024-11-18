<?php

require '../config/banco.php';


class usuario {
  
    private $conexao;
    private $tabela ='usuarios';
    
    protected $id;
    protected $nome;
    protected $dataNascimento;
    protected $email;
    protected $endereco;
    protected $senha;

    public function __construct($bd){
        $this->conexao = $bd;
    }

}


public function create(){
    $query = "INSERT INTO {$this->usuario} (nome,nascimento,email,endereco,senha) values ('{$this->nome}','{$this->nascimento}', '{$this->email}', '{$this->endereco}', '{$this->senha}');";

    $resultado = $this->conexao->query($query);

    return $resultado;

}
  

  