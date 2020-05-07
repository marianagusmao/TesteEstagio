create table USUARIO(
	id int NOT NULL AUTO_INCREMENT primary key,
    nome varchar(255),
    email varchar(255),
    senha varchar (45),
    status varchar(1)
);

create table LOJAS(
	id int NOT NULL AUTO_INCREMENT primary key,
    nome varchar(255),
    descricao text,
    segmento varchar(45),
    telefone varchar(45),
    celular varchar (45),
    status varchar(1),
    usuario_id int,
    foreign key (usuario_id)
    references USUARIO (id) 
);

create table PRODUTOS(
	id int NOT NULL AUTO_INCREMENT primary key,
    nome varchar(100),
    descricao text,
    preco double,
    status varchar(1),
    loja_id int,
    foreign key (loja_id)
    references LOJAS (id)
);

create table CATEGORIAS(
	id int NOT NULL AUTO_INCREMENT primary key,
    nome varchar(45),
    descricao text
);

create table categorias_produtos(
	categorias_id int,
    foreign key (categorias_id)
    references CATEGORIAS (id),
    produtos_id int,
    foreign key (produtos_id)
    references PRODUTOS (id)
);
