create database BibliotecaPHP;
use BibliotecaPHP;

create table usuario(
    id int primary key auto_increment;
    nome varchar(100);
    cep varchar(8);
    qtd_livro int(11)
);

create table usuario(
    id int(11) primary key auto_increment;
    titulo varchar(255);
    autor varchar(100);
    genero varchar(100);
    status_livro enum("Disponível", "Indisponível");
    id_usuario int(11);
    foreign key (id_usuario) references usuario(id)
);
