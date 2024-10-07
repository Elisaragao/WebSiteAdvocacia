CREATE DATABASE siteAdvocacia;

USE siteAdvocacia;

CREATE TABLE conta (
  numOAB int(11) PRIMARY KEY,
  nome char(50),
  email varchar(50),
  cpf varchar(15)
);

CREATE TABLE orcamento (
  cpf varchar(15) PRIMARY KEY,
  nome varchar(50),
  email varchar(50),
  telefone varchar(15),
  turnoContato varchar(15),
  varaProcessual varchar(30),
  descricao text
);

