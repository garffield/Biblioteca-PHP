<?php

require "Biblioteca.php";  
require "Usuario.php";  
require "Livro.php";


use Livro as Livro;
use Usuario as Usuario;

$domCasmurro = new Livro("Dom Casmurro", "Machado de Assis", "Ficção");

Biblioteca::cadastrarLivro($domCasmurro);
    