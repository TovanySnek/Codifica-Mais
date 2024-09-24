<?php

require __DIR__ . '/../src/conectar_banco.php';

//$sql = 'INSERT INTO produto (id, nome, sku, unidade_medida_id, valor, quantidade, categoria_id) VALUES ';
//$statement = $pdo->prepare($sqlInsert);
//$statement->bindValue(1, $_POST['id']);
//$statement->bindValue(2, $_POST['nome']);
//$statement->bindValue(3, $_POST['sku']);
//$statement->bindValue(4, $_POST['unidade_medida_id']);
//$statement->bindValue(5, $_POST['valor']);
//$statement->bindValue(6, $_POST['quantidade']);
//$statement->bindValue(7, $_POST['categoria_id']);

//var_dump($statement->execute());

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de produtos</title>
    <link rel="stylesheet" href="/css/styleCadastro.css">
</head>
<body>

    <header>
        <section class="xtlye__Titulo">
            <h1>Novo Item</h1>
        </section>
    </header>

    <main>

        <section class="xtlye_formulario">
            <form method="POST" action="/produtos/salvar">
                <div class="xtyle__input">
                    <label >Nome do Item:</label>
                    <input  type="text" name="nome" required/>
                </div>
                <div class="xtyle__input">
                    <label >SKU:</label>
                    <input name="sku" required/>
                </div>
                <div class="xtyle__input">
                    <label >Unidade de Medida:</label>
                    <select name="unidade medida" value="<?= $produto['unidade medida'] ?>" required>
                        <option>Un</option>
                        <option>Kg</option>
                        <option>g</option>
                        <option>L</option>
                        <option>mm</option>
                        <option>cm</option>
                        <option>m</option>
                        <option>m²</option>
                    </select>
                </div>
                <div class="xtyle__input">
                    <label>Valor:</label>
                    <input type="text" name="valor" required/>
                </div>
                <div class="xtyle__input">
                    <label>Quantidade:</label>
                    <input name="quantidade" required/>
                </div>
                <div class="xtyle__input">
                    <label>Categoria:</label>
                    <select name="categoria" value="<?= $produto['categoria'] ?>" required>
                        <option>Eletrônicos</option>
                        <option>Eletrodomésticos</option>
                        <option>Móveis</option>
                        <option>Decoração</option>
                        <option>Vestuário</option>
                        <option>Outros</option>
                    </select>
                </div>
                <div class="button">
                    <button>Criar Item</button>
                </div>
            </form>
        </section>

    </main>

</body>
</html>
