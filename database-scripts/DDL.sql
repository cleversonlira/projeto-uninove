CREATE DATABASE Restaurante;
USE Restaurante;

CREATE TABLE Cliente
(
	id INTEGER auto_increment,
	cpf VARCHAR(11) not null,
    nome VARCHAR(255) not null,
    telefone VARCHAR(11) not null,
    constraint pkCpf primary key(id, cpf)
);

CREATE TABLE Produto
(
	id INTEGER auto_increment,
	nome VARCHAR(255) NOT NULL,
    valor DECIMAL(5,2) NOT NULL,
    idTipoProduto integer,
    constraint pkProduto primary key(id),
    
    constraint fkTipoProduto foreign key(idTipoProduto)
    references TipoProduto(id)
);

CREATE TABLE TipoProduto
(
	id integer,
    nome VARCHAR(255),
    CONSTRAINT pkTipoProduto PRIMARY KEY(id)
);

CREATE TABLE statusPedido
(
	id INTEGER AUTO_INCREMENT,
    valorStatus VARCHAR(255) DEFAULT 'Em Andamento',
    constraint pkStatusPedido primary key(id)
);

CREATE TABLE Pedido
(
	codigo INTEGER AUTO_INCREMENT,
    cpfCliente VARCHAR(11) NOT NULL,
    mesa INTEGER NOT NULL,
    itens VARCHAR(255) NOT NULL,
    idStatusPedido INTEGER,
    
    constraint pkPedido primary key(codigo),
    
    constraint fkCliente foreign key(codigo, cpfCliente)
    references Cliente(id, cpf),
    
    constraint fkStatusPedido foreign key(idStatusPedido)
    references statusPedido(id)
);
    
 