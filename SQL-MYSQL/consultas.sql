SELECT nome, categoria, preco, fabricante FROM produtos
INNER JOIN categorias ON categoria = nome_categoria
INNER JOIN fabricantes ON fabricante = nome_fabricante
WHERE fabricante = 1 