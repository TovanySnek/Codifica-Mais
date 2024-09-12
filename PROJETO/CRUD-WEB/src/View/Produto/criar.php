<?php


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
                    <input type="text" name="unidade medida" required/>
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
                        <option>Vestuário</option>
                        <option>Eletrônicos</option>
                        <option>Escritório</option>
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
