-- CREATE DATABASE Restaurante;
-- USE Restaurante;

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
    
    constraint pkProduto primary key(id)
);

CREATE TABLE statusPedido
(
	id INTEGER AUTO_INCREMENT,
    valorStatus VARCHAR(255) DEFAULT 'Em Andamento',
    constraint pkStatusPedido primary key(id)
);

CREATE TABLE Pedido
(
	codigo INTEGER,
    cpfCliente VARCHAR(11) NOT NULL,
    mesa INTEGER NOT NULL,
    itens VARCHAR(255) NOT NULL,
    idStatusPedido INTEGER,
    
    constraint pkPedido primary key(codigo),
    
    constraint fkCliente foreign key(cpfCliente)
    references Cliente(cpf)  ,
    
    constraint fkStatusPedido foreign key(statusPedido)
    references StatusPedido(id)
);

