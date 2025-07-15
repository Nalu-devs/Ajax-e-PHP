create database livraria;
use livraria;
create table livros(
    id int,
    titulo varchar(100),
    autor varchar(100),
    primary key(id)
);

insert into livros values(1, 'Desenvolvendo websites com PHP', 'Juliano Niederauer');
insert into livros values(2, 'Guia postgreSQL', 'Juliano Niederauer');