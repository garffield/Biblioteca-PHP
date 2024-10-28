<?php

class Biblioteca {

    const localhost = 'localhost';
    const usuario = 'root';
    const senha = '';
    const bancoDeDados = 'BibliotecaPHP';

    public static function emprestar($livro, $usuario) {
        $livro->emprestar($usuario);
        $usuario->emprestar($livro);
    }
    public static function conexao() {
        return $conn = mysqli_connect(self::localhost, self::usuario, self::senha, self::bancoDeDados);
    }

    public static function cadastrarLivro($livro) {
        self::conexao()->query($livro->criar());
        self::conexao()->close();
    }
    public static function atualizarLivro($livro, $valores) {
        self::conexao()->query($livro->atualizarLivro($valores));
        self::conexao()->close();
    }
}