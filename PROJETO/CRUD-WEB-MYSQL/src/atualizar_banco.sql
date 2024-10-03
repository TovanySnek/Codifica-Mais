-- Tabela de Categorias
CREATE TABLE categoria (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL
);

CREATE INDEX idx_categoria_nome ON categoria(nome);

-- Tabela de Unidades de Medida
CREATE TABLE unidade_medida (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL
);

CREATE INDEX idx_unidade_nome ON unidade_medida(nome);

-- Tabela de Produtos
CREATE TABLE produto (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    sku VARCHAR(50) NOT NULL,
    unidade_medida_id INT NOT NULL,
    valor DECIMAL(10,2) NOT NULL,
    quantidade INT NOT NULL,
    categoria_id INT NOT NULL
    imagem VARCHAR(255)
);

CREATE INDEX idx_produto_categoria ON produto(categoria_id);
CREATE INDEX idx_produto_unidade ON produto(unidade_medida_id);

-- Inserts para a tabela de Categorias
INSERT INTO categoria (id, nome) VALUES
(1, 'Eletrônicos'),
(2, 'Eletrodomésticos'),
(3, 'Móveis'),
(4, 'Decoração'),
(5, 'Vestuário'),
(7, 'Outros');

-- Inserts para a tabela de Unidades de Medida
INSERT INTO unidade_medida (id, nome) VALUES
(1, 'Un'),
(2, 'Kg'),
(3, 'g'),
(4, 'L'),
(5, 'mm'),
(6, 'cm'),
(7, 'm'),
(8, 'm²');

-- Inserts para a tabela de Produtos
INSERT INTO produto (id, nome, sku, unidade_medida_id, valor, quantidade, categoria_id) VALUES
(1, 'Smartphone', '123456', 1, 1500.00, 10, 1),
(2, 'Geladeira', '123457', 2, 2500.00, 5, 2);
