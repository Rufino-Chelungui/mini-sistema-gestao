/*SCRIPT PARA O BANCO DE DADOS, RODA O SCRPT NO TEU GERENCIADOR DE BANCO DE DADOS*/

create database C_E_S;
use C_E_S;
drop database C_E_S;

select*from adimins;
create table adimins(
id int primary key auto_increment,
nome varchar(50),
email varchar(60),
senha varchar(30)
);
insert into adimins values(default,'Rufino Chelungui','rufino@gmail.com','123456789');
insert into adimins values(default,'Teacher Eric','eric@gmail.com','123456789');

select*from niveis;
create table niveis(
id int primary key auto_increment,
nivel varchar(100),
preco float
);

select*from inscricoes;
create table inscricoes(
id int primary key auto_increment,
nome varchar(50),
bi varchar(30),
genero varchar(50),
dt_nascimento date,
telefone varchar(50),
dt_inscricao date,
id_nivel int,
foreign key(id_nivel) references niveis(id) on delete cascade on update cascade
);
select inscricoes.*, niveis.nivel from inscricoes join niveis on inscricoes.id_nivel=niveis.id;

select*from formandos;
create table formandos(
id int primary key auto_increment,
periodo varchar(50),
ano_lectivo int,
id_inscricoes int,
id_nivel int,
foreign key(id_inscricoes) references inscricoes(id) on delete cascade on update cascade,
foreign key(id_nivel) references niveis(id) on delete cascade on update cascade
);
select formandos.*, inscricoes.nome, niveis.nivel from formandos 
join inscricoes on formandos.id_inscricoes=inscricoes.id
join niveis on formandos.id_nivel=niveis.id;

/*FIM DO SCRIPT*/

/*MINI SISTEMA DE GESTÃO PARA CENTRO DE FORMAÇÃO DE INGLÊS*/