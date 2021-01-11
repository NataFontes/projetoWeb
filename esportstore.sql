CREATE database esportstore;

USE esportstore;

CREATE table usuario(
	cpf BIGINT NOT NULL auto_increment,
	nomeusuario VARCHAR(60) NOT NULL,
	email VARCHAR(12) NOT NULL,
	datanascimento DATE NOT NULL,
	sexo CHAR(1) NOT NULL,
	tipousuario VARCHAR(10) NOT NULL,
	PRIMARY KEY(cpf)
);

CREATE table endereco(
	idendereco INT(11) NOT NULL auto_increment,
	cpf BIGINT NOT NULL,
	rua VARCHAR(60) NOT NULL,
	numero VARCHAR(7) NOT NULL,
	complemento VARCHAR(60) NOT NULL,
	bairro VARCHAR(60) NOT NULL,
	cidade VARCHAR(60) NOT NULL,
	cep VARCHAR(60) NOT NULL,
	PRIMARY KEY(idendereco),
	FOREIGN KEY (cpf) REFERENCES usuario(cpf) ON DELETE CASCADE ON UPDATE CASCADE);

CREATE table categoria(
	idcategoria INT NOT NULL,
	descricao VARCHAR(50) NOT NULL,
	PRIMARY KEY(idcategoria)
	);

CREATE table produto(
	idproduto INT(11) NOT NULL auto_increment,
	idcategoria INT NOT NULL,
	preco DOUBLE NOT NULL,
	nomeproduto VARCHAR(30) NOT NULL, 
	descricao VARCHAR(60) NOT NULL,
	imagem VARCHAR(60) NOT NULL,
	quant_disp INTEGER NOT NULL,
	PRIMARY KEY(idproduto),
	FOREIGN KEY (idcategoria) REFERENCES categoria(idcategoria) ON DELETE CASCADE ON UPDATE CASCADE
	);






