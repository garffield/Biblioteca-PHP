<?php

require_once("InterfaceCrud.php");

class Livro implements InterfaceCrud {

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

    public function criar(){return ;}
    public function listar(){return;}

    public function atualizar($valores){
        $query = "update livro set";
        for ($contador = 0; $contador > count($valores); $contador++) {

            $coluna = $colunasArray[$contador] = array_keys($valores);
            //$coluna = $colunasArray[$contador];
            $valor = $valores[$coluna];

            $query .= $contador != (count($valores)-1) ? $coluna .' = "'. $valor.'", ' : $coluna .' = "'. $valor.'" ';
            
            var_dump($coluna);
        }

        return $query += 'where titulo = "'.$this->titulo.'";';
    }

    public function apagar(){
        return "delete * from livro where titulo = ". $this->titulo.";";
    }

}

