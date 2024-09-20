<?php


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de produtos</title>
    <link rel="stylesheet" href="/css/styleCadastro.css">
</head>
<body>

    <header>
        <section class="xtlye__Titulo">
            <h1>Editar - #<?= $id ?></h1>
        </section>
    </header>

    <main>

        <section class="xtlye_formulario">
            <form method="POST" action="/produtos/salvar?id=<?= $produto['id'] ?>">
                <div class="xtyle__input">
                    <label >Nome do Item:</label>
                    <legend><?= $produto['nome'] ?></legend>
                    <input  type="text" name="nome" value="<?= $produto['nome'] ?>"/>
                </div>
                <div class="xtyle__input">
                    <label >SKU:</label>
                    <legend><?= $produto['sku'] ?></legend>
                    <input name="sku" value="<?= $produto['sku'] ?>"/>
                </div>
                <div class="xtyle__input">
                    <label >Unidade de Medida:</label>
                    <legend><?= $produto['unidade medida'] ?></legend>
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
                    <legend><?= $produto['valor'] ?></legend>
                    <input type="text" name="valor" value="<?= $produto['valor'] ?>"/>
                </div>
                <div class="xtyle__input">
                    <label>Quantidade:</label>
                    <legend><?= $produto['quantidade'] ?></legend>
                    <input name="quantidade" value="<?= $produto['quantidade'] ?>"/>
                </div>
                <div class="xtyle__input">
                    <label>Categoria:</label>
                    <legend><?= $produto['categoria'] ?></legend>
                    <select name="categoria" value="<?= $produto['categoria'] ?>">
                        <option>Eletrônicos</option>
                        <option>Eletrodomésticos</option>
                        <option>Móveis</option>
                        <option>Decoração</option>
                        <option>Vestuário</option>
                        <option>Outros</option>
                    </select>
                </div>
                <div class="button">
                    <button>Atualizar Item</button>
                </div>
            </form>
        </section>

    </main>

</body>
</html>