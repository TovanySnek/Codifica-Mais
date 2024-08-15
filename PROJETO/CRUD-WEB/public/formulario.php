<?php
session_start();

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
            <div>
                <label>Nome do Item:</label>
                <input type="text"/>
            </div>
            <div>
                <label>SKU:</label>
                <input type="text"/>
            </div>
            <div>
                <label>Unidade de Medida:</label>
                <input type="text"/>
            </div>
            <div>
                <label>Valor:</label>
                <input type="text"/>
            </div>
            <div>
                <label>Quantidade:</label>
                <input type="text"/>
            </div>
            <div>
                <label>Categoria:</label>
                <select name="Categoria">
                    <option>Vestuário</option>
                    <option>Eletrônicos</option>
                    <option>Escritório</option>
                </select>
            </div>
            <div class="button">
                <button>Criar Item</button>
            </div>
        </section>

    </main>

</body>
</html>