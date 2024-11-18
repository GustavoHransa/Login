create database login;
use login;

create table usuarios (
    id int auto_increment primary key,
    nome varchar(50) not null unique,
    nascimento date,
    email varchar (50) not null,
    endereco varchar(100),
    senha varchar(255) not null
);

insert into usuarios (nome,nascimento,email,endereco,senha) values ('nome_teste','2000-01-01','teste@teste.com.br', '123456789');
