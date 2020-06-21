SET NAMES 'utf8';
SET CHARSET 'utf8';

CREATE DATABASE IF NOT EXISTS posto_marcon
  DEFAULT CHARACTER SET 'utf8';


CREATE TABLE posto_marcon.fornecedor (
  cod VARCHAR(100) NOT NULL,
  razao_social VARCHAR(100) NULL,
  nome_fantasia VARCHAR(100) NULL,
  endereco VARCHAR(100) NULL,
  cidade VARCHAR(100) NULL,
  uf VARCHAR(100) NULL,
  cep VARCHAR(100) NULL,
  ie INTEGER(100) UNSIGNED NULL,
  email VARCHAR(100) NULL,
  telefone VARCHAR(20) NULL,
  PRIMARY KEY(cod)
);

CREATE TABLE posto_marcon.prod (
  cod BIGINT NOT NULL AUTO_INCREMENT,
  descri VARCHAR(100) NULL,
  quantidade INT NULL,
  quant_min INT NULL,
  preco FLOAT NULL,
  marca VARCHAR(100) NULL,
  unidade VARCHAR(100) NULL,
  tanque VARCHAR(100) NULL,
  PRIMARY KEY(cod)
);

CREATE TABLE posto_marcon.cliente (
  cod VARCHAR(100) NOT NULL,
  nome VARCHAR(100) NULL,
  endereco VARCHAR(100) NULL,
  cidade VARCHAR(100) NULL,
  uf VARCHAR(100) NULL,
  cep VARCHAR(100) NULL,
  email VARCHAR(100) NULL,
  telefone VARCHAR(20) NULL,
  PRIMARY KEY(cod)
);

CREATE TABLE posto_marcon.venda (
  cliente_cod VARCHAR(100) NOT NULL,
  prod_cod BIGINT NOT NULL,
  data_venda DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  quantidade_vendida INT NULL,
  PRIMARY KEY(cliente_cod, prod_cod)
);

CREATE TABLE posto_marcon.compra (
  prod_cod BIGINT NOT NULL,
  fornecedor_cod VARCHAR(100) NOT NULL,
  quantidade INT NULL,
  preco_unitario FLOAT NULL,
  valor_total FLOAT NULL,
  data_compra DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  data_entrega DATETIME NULL,
  PRIMARY KEY(prod_cod, fornecedor_cod)
);


