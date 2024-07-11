CREATE TABLE produtos (
    id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome varchar(50) NOT NULL,
    sku varchar(30) NOT NULL,
    descricao text,
    categoria int NOT NULL,
    preco float NOT NULL,
    unidade_medida int NOT NULL,
    peso int NOT NULL,
    quantidade_estoque int NOT NULL,
    fabricante int NOT NULL,
    fornecedor int NOT NULL,
    deleted_at TIMESTAMP NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    CONSTRAINT FK_categoriaProduto FOREIGN KEY (categoria) REFERENCES categorias(id),
    CONSTRAINT FK_categoriaMedida FOREIGN KEY (unidade_medida) REFERENCES unidades_medida(id),
    CONSTRAINT FK_categoriaFabricante FOREIGN KEY (fabricante) REFERENCES fabricantes(id),
    CONSTRAINT FK_categoriaFornecedor FOREIGN KEY (fornecedor) REFERENCES fornecedores(id)
)

CREATE TABLE categorias (
    id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome_categoria varchar(50) NOT NULL,
    deleted_at TIMESTAMP NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)

CREATE TABLE unidades_medida (
    id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome_unidade_medida varchar(50) NOT NULL,
    deleted_at TIMESTAMP NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)

CREATE TABLE fabricantes (
    id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome_fabricante varchar(50) NOT NULL,
    deleted_at TIMESTAMP NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)

CREATE TABLE fornecedores (
    id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome_fornecedor varchar(50) NOT NULL,
    deleted_at TIMESTAMP NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)
