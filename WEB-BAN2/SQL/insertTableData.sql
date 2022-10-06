INSERT INTO `cargo` 
(nome, salario, cargaHoraria)
VALUES 
('cozinheiro', 3200, 10),
('faxineiro', 1600, 8),
('recepcionista', 1500, 6)
;

INSERT INTO `funcionarios`
(nome, telefone, email, cep, nro, tipo)
VALUES
('paula', '47111111111','paula@gmail.com','11111111','111', 1),
('murilo', '47222222222','murilo@gmail.com','22222222','222', 2),
('rodrigo', '47333333333','rodrigo@gmail.com','33333333','333', 3)
;

INSERT INTO `ingredientes` 
(nome, preco)
VALUES 
('macarrão',6),
('carne', 60),
('alho', 20),
('cebola', 5),
('tomate', 4)
;

INSERT INTO `estoque` 
(codigoEstoque, quantidade, dataValidade)
VALUES 
('1', 20, '2023-11-10'),
('2', 60, '2022-10-30'),
('3', 20, '2022-12-9'),
('4', 5, '2022-12-12'),
('5', 4, '2022-11-4')
;

INSERT INTO `pratos` 
(nome, tempoPreparo, preco)
VALUES 
('macarrão bolonhesa', 45, 15),
('carne com tomate', 40, 20)
;

INSERT INTO `preparo` 
(codigoIngrediente, codigoPrato)
VALUES 
(1,1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(2, 2),
(3, 2),
(4, 2),
(5, 2)
;

INSERT INTO `clientes`
(nome, telefone, email, cep, nro)
VALUES
('cleber', '47444444444','cleber@gmail.com','44444444','444'),
('maria', '47555555555','maria@gmail.com','55555555','555'),
('joana', '47666666666','joana@gmail.com','66666666','666')
;

INSERT INTO `pedidos` 
(cliente, valor)
VALUES 
(1, 35),
(2, 50),
(3, 70)
;

INSERT INTO `itenspedido` 
(codigoPedido, codigoPrato)
VALUES 
(1, 1),
(1, 2),
(2, 1),
(2, 1),
(2, 2),
(3, 1),
(3, 1),
(3, 2),
(3, 2)
;