SELECT a.nome, a.preco, c.nome_fabricante,  b.nome_categoria FROM produtos a
INNER JOIN categorias b ON a.categoria = b.id
INNER JOIN fabricantes c ON a.fabricante = c.id
WHERE a.fabricante = 1

SELECT a.nome, a.preco, b.nome_categoria, d.nome_unidade_medida FROM produtos a
INNER JOIN categorias b ON a.categoria = b.id
INNER JOIN unidades_medida d ON a.unidade_medida = d.id
WHERE a.categoria = 1 & a.unidade_medida = 1

SELECT a.nome, a.preco, c.nome_fabricante,  b.nome_categoria, d.nome_unidade_medida FROM produtos a
INNER JOIN categorias b ON a.categoria = b.id
INNER JOIN fabricantes c ON a.fabricante = c.id
INNER JOIN unidades_medida d ON a.unidade_medida = d.id
WHERE a.categoria = 1 & a.unidade_medida = 1

SELECT a.nome, a.preco, b.nome_fornecedor, a.quantidade_estoque FROM produtos a
INNER JOIN fornecedores b ON a.fornecedor = b.id
WHERE a.fornecedor = 1 