INSERT INTO laravel.clientes (nm_cliente,dt_nascimento) VALUES
	 ('jovem 1','1952-09-04'),
	 ('jovem 2','1953-01-15'),
	 ('jovem 3','1953-01-15'),
	 ('jovem 4','1951-01-15'),
	 ('jovem 5','1941-01-15'),
	 ('jose','1993-01-15');
	 
INSERT INTO laravel.pedido_itens (qt_produto,id_pedido,id_produto) VALUES
	 (10,3,2),
	 (1,4,2),
	 (1,5,11),
	 (4,6,11),
	 (5,7,1),
	 (4,8,2),
	 (3,9,3),
	 (4,10,4),
	 (2,11,5),
	 (1,12,6);
INSERT INTO laravel.pedido_itens (qt_produto,id_pedido,id_produto) VALUES
	 (20,13,9),
	 (2,14,8),
	 (3,15,8),
	 (50,19,10),
	 (50,19,10),
	 (500,20,6);


INSERT INTO laravel.pedidos (dt_pedido,id_cliente) VALUES
	 ('2023-09-03',1),
	 ('2023-09-03',1),
	 ('2023-08-03',1),
	 ('2023-08-04',1),
	 ('2023-08-05',1),
	 ('2023-08-05',1),
	 ('2023-08-05',1),
	 ('2023-08-05',1),
	 ('2023-08-05',1),
	 ('2023-08-05',1);
INSERT INTO laravel.pedidos (dt_pedido,id_cliente) VALUES
	 ('2023-08-05',1),
	 ('2023-08-05',1),
	 ('2023-08-06',1),
	 ('2023-08-07',1),
	 ('2023-08-07',1),
	 ('2023-08-04',1),
	 ('2022-08-04',1);
	 
	 
 INSERT INTO laravel.produto_grupos (nm_produto_grupo) VALUES
	 ('console'),
	 ('celulares'),
	 ('moveis'),
	 ('eletrodomesticos'),
	 ('roupas'),
	 ('acessorios'),
	 ('calcados');
	 
	 
 INSERT INTO laravel.produtos (nm_produto,vl_compra,vl_venda,produto,id_produto_grupo) VALUES
	 ('xbox',1500.00,2500.00,'video game',1),
	 ('iphone',1500.00,2500.00,'apple',2),
	 ('ps5',2500.00,3500.00,'sony',1),
	 ('j5',500.00,700.00,'samsung',2),
	 ('redmi',500.00,700.00,'xiaomi',2),
	 ('geladeira',500.00,700.00,'consul',4),
	 ('fogao',500.00,700.00,'brastamp',4),
	 ('sofa',1000.00,1500.00,'marabraz',3),
	 ('camisa',200.00,250.00,'nike',5),
	 ('secador',100.00,200.00,'taiff',6);
INSERT INTO laravel.produtos (nm_produto,vl_compra,vl_venda,produto,id_produto_grupo) VALUES
	 ('tenis',150.00,300.00,'adidas',7),
	 ('teste',1.00,2.00,'aa',1);



