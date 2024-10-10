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
            <form method="POST" action="/produtos/atualizar?id=<?= $produto['id'] ?>" enctype="multipart/form-data">
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
                    <legend><?= $produto['unidade_medida_id'] ?></legend>
                    <select name="unidade_medida_id" value="<?= $produto['unidade_medida_id'] ?>" required>
                        <option value=1>Un</option>
                        <option value=2>Kg</option>
                        <option value=3>g</option>
                        <option value=4>L</option>
                        <option value=5>mm</option>
                        <option value=6>cm</option>
                        <option value=7>m</option>
                        <option value=8 >m²</option>
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
                    <legend><?= $produto['categoria_id'] ?></legend>
                    <select name="categoria_id" value="<?= $produto['categoria_id'] ?>" required>
                        <option value=1>Eletrônicos</option>
                        <option value=2>Eletrodomésticos</option>
                        <option value=3>Móveis</option>
                        <option value=4>Decoração</option>
                        <option value=5>Vestuário</option>
                        <option value=6>Outros</option>
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