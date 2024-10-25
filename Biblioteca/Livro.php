<?php

require "InterfaceCrud.php";

class Livro extends InterfaceCrud {

    public $titulo;
    public $autor;
    public $genero;
    public $status = "Disponível";
    public $usuario;
    
    public function __construct($titulo, $autor, $genero) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->genero = $genero;
    }

    public function emprestar($usuario) {
        if($this->status != "Disponível"){
            echo "Já está emprestado";
        }
        $this->status = "Indisponível";
        $this->usuario = $usuario;
    }

    public function devolver(){
        if($this->status == "Disponível"){
            echo "Devolvido";
            return;
        }
    }

    public function criar(){
        
        return ;
    }
    public function listar(){
        
        return;
    }
    public function atualizar($arrayColunas){
        $query = "update livro set";

        foreach ($arrayColunas as $coluna) {
            
            //pegar a chave
            $chave

            //pegar valor
            $valor

            $query += .$chave. ' = "' .$valor. '"';
        }

        return $query += 'where titulo = "'.
        $this->titulo. '";';
    }

    public function apagar(){
        return "delete * from livro where titulo = ".
        $this->titulo.";";
    }
    
    

}