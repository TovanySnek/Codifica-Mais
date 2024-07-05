INSERT INTO produtos (nome, sku, descricao, categoria, preco, unidade_medida, peso, quantidade_estoque, fabricante, fornecedor)
VALUES ('Sabão', 'P001', 'Cheiroso', 1, 22.90, 1, 200, 30, 1, 1),
('Picanha', 'P002', 'Empacotada', 2, 159.99, 2, 2, 7, 2, 2),
('Esmalte', 'P003', 'Preto', 3, 10.50, 1, 20, 10, 2, 3),
('Sal', 'P004', 'Fino', 2, 30.00, 1, 500, 45, 4, 1),
('Café', 'P005', 'Mascavo', 2, 15.99, 1, 250, 15, 5, 4),
('Biscoito', 'P006', 'Recheado', 2, 10.99, 1, 150, 10, 3, 4),
('Protetor_Solar', 'P007', 'FPS70', 3, 70.00, 1, 350, 5, 3, 3),
('Leite', 'P008', 'Soja', 2, 15.90, 3, 1, 23, 2, 2),
('Refrigerante', 'P009', 'Garrafa', 2, 12.00, 3, 2, 35, 4, 4),
('Manga', 'P010', 'Madura', 2, 10.90, 1, 600, 12, 3, 1);

INSERT INTO categorias (nome_categoria)
VALUES ('Limpeza'),
('Comida'),
('Maquiagem');

INSERT INTO unidades_medida (nome_unidade_medida)
VALUES ('Gramas'),
('Kilogramas'),
('Litros');

INSERT INTO fabricantes (nome_fabricante)
VALUES ('Dove'),
('LaCarne'),
('Doria'),
('Globo'),
('3Coracoes');

INSERT INTO fornecedores (nome_fornecedor )
VALUES ('Jorge LigaChega'),
('LaCarneINC'),
('Marcos Pacote'),
('Zona_Distribuidora');