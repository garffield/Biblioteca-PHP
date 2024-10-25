<?php

class Usuario implements InterfaceCrud {

    public $nome;
    public $senha;
    const MAX_EMPRESTIMO = 2;
    
    public function __construct($nome, $senha) {
        $this->nome = $nome;
        $this->senha = $senha;
    }

    public function emprestarLivro($livro) {
        if ($livro > 2) {
            echo "Limite de emprestimo atingido";
        }
        
    }



}

class Livro extends Crud {

    public $isbn;
    public $nomeLivro;
    public $autor;
    public function cadastro () {}
    public function listar () {}

}