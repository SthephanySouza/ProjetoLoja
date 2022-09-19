create database BD_A;
use BD_A;

create table tbl_produto(
codigo int primary key auto_increment,
produto varchar(200),
preco decimal(6,2),
cod_cad int,
 foreign key (cod_cad) references tbl_categoria(cd_cad)
);

create table tbl_categoria(
cd_cad int primary key auto_increment,
categoria varchar(200)
);

insert into tbl_produto(produto, preco, cod_cad)
				 values('Camisa Brasil', 280.00, 1),
                       ('Corneta', 56.00, 2),
                       ('Chapeu Brasil', 68.00, 2),
                       ('Calça Agasalho', 220.00, 1);
                       
insert into tbl_categoria(categoria)
                   values('Vestimenta'),
                         ('Acessorio');

create view vw_prod as
select
	tbl_produto.codigo,
    tbl_produto.produto,
    tbl_produto.preco,
    tbl_categoria.categoria
from tbl_produto inner join tbl_categoria on tbl_produto.cod_cad = tbl_categoria.cd_cad;

select * from vw_prod;

select * from tbl_categoria;
select * from tbl_produto;

create table tbl_usuario(
Codigo bigint primary key auto_increment,
Nome varchar(200) not null,
Login varchar(200) not null,
Senha bigint not null
);

insert into tbl_usuario values(default, 'Felipe', 'felp@gmail.com', 123456);

select * from tbl_usuario;