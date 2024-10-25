<?php

require "InterfaceCrud.php";

class Usuario implements InterfaceCrud {

public $nome;
public $cep;
public $livrosEmprestados = [];
const MAX_EMPRESTIMO = 3;

public function __construct($nome, $cep ) {
    $this->nome = $nome;
    $this->cep = $cep;
}

public function emprestarLivro($livro) {
    if (count($this->livrosEmprestados) < self::MAX_EMPRESTIMO) {
        array_push($this->livrosEmprestados, $livro);
    }
}
public function devolverLivro($livro){
    if(in_array($livro, $this->livrosEmprestados)) {
        $position = array_search($livro, $this->livrosEmprestados);
        unset($this->livrosEmprestados[$position]);
    }
}

public function criar(){
    
    return;
}
public function listar(){
    
    return;
}
public function atualizar(){
    
    return;
}
public function apagar(){
    
    return;
}


}