CREATE TABLE `Cargo` (
	`codigo` int NOT NULL auto_increment,
	`nome` varchar(30) NOT NULL,
	`salario`  float NOT NULL,
	`cargaHoraria`   int NOT NULL,
	PRIMARY KEY (`codigo`)
);

CREATE TABLE `Funcionarios` (
	`codigo`         int NOT NULL auto_increment,
	`nome` varchar(30) NOT NULL,
	`telefone`  varchar(11) NOT NULL,
	`email`   varchar(50) NOT NULL,
	`cep`      varchar(8) NOT NULL,
	`nro`     int NOT NULL,
	`tipo` int NOT NULL,
	PRIMARY KEY (`codigo`),
    FOREIGN KEY (`tipo`) REFERENCES cargo(`codigo`)
);

CREATE TABLE `Ingredientes` (
	`codigo` int NOT NULL auto_increment,
	`nome` varchar(30) NOT NULL,
	`preco`  float NOT NULL,
	PRIMARY KEY (`codigo`)
);

CREATE TABLE `Estoque` (
	`codigo` int NOT NULL auto_increment,
	`quantidade` int NOT NULL,
	`dataValidade`  date NOT NULL,
	PRIMARY KEY (`codigo`),
    FOREIGN KEY (`codigo`) REFERENCES ingredientes(`codigo`)
);

CREATE TABLE `Pratos` (
	`codigo` int NOT NULL auto_increment,
	`nome` varchar(30) NOT NULL,
	`tempoPreparo`  int NOT NULL,
    `preco`  float NOT NULL,
	PRIMARY KEY (`codigo`)
);

CREATE TABLE `Preparo` (
	`codigo` int NOT NULL auto_increment,
	`codigoIngrediente` int NOT NULL,
	`codigoPrato`  int NOT NULL,
	PRIMARY KEY (`codigo`),
    FOREIGN KEY (`codigoIngrediente`) REFERENCES ingredientes(`codigo`),
    FOREIGN KEY (`codigoPrato`) REFERENCES pratos(`codigo`)
);

CREATE TABLE `Clientes` (
	`codigo` int NOT NULL auto_increment,
	`nome` varchar(30) NOT NULL,
	`telefone` varchar(11) NOT NULL,
	`email` varchar(50) NOT NULL,
	`cep` varchar(8) NOT NULL,
	`nro` int NOT NULL,
	PRIMARY KEY (`codigo`)
);

CREATE TABLE `Pedidos` (
	`codigo` int NOT NULL auto_increment,
	`cliente` int NOT NULL,
	`valor`  float NOT NULL,
	PRIMARY KEY (`codigo`),
    FOREIGN KEY (`cliente`) REFERENCES clientes(`codigo`)
);

CREATE TABLE `ItensPedido` (
	`codigo` int NOT NULL auto_increment,
	`codigoPedido` int NOT NULL,
	`codigoPrato`  int NOT NULL,
	PRIMARY KEY (`codigo`),
    FOREIGN KEY (`codigoPedido`) REFERENCES pedidos(`codigo`),
    FOREIGN KEY (`codigoPrato`) REFERENCES pratos(`codigo`)
);

