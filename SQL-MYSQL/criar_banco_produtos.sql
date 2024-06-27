CREATE TABLE produtos (
    id int NOT NULL AUTO_INCREMENT,
    nome varchar(50) NOT NULL,
    sku varchar(30) NOT NULL,
    descricao text,
    categoria varchar(50) NOT NULL,
    preco float NOT NULL,
    unidade_medida varchar(20) NOT NULL,
    peso int NOT NULL,
    quantidade_estoque int NOT NULL,
    fabricante varchar(50) NOT NULL,
    fornecedor varchar(50) NOT NULL,
    deleted_at date,
    created_at date NOT NULL,
    updated_at date
);