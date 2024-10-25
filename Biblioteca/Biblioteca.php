<?php

class Biblioteca {

    const localhost = 'localhost';
    const usuario = 'usuario';
    const senha = '';
    const bancoDeDados = 'BibliotecaPHP';

    public static function conexao() {
        return $conn = mysqli_connect(self::localhost, self::usuario, self::senha, self::bancoDeDados);
    }

    public fun
    
}