<?php
session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de produtos</title>
    <link rel="stylesheet" href="/css/styleFormulario.css">
</head>
<body>
       
    <header>
        <section class="xtlye__header__guia">
            <a class="xtlye__header__link" href="">Novo Item</a>
            <section class="xtyle__header__busca">
                <input type="text" class="xtlye__busca__imput" placeholder="Buscar..."/>
                <button class="xtlye__busca__botao">Buscar</button>
            </section>    
        </section>

    </header>

    <main>
        <section class="xtlye_main_guia">

            <section class="xtyle_main_caixaconteudo">
                <div class="xytle_caixa_id">
                    <h1>#000001</h1>
                </div>
                <div class="xytle_caixa_categoria">
                    <h1>Vestuário</h1>
                </div>
                <div class="xytle_caixa_sku">
                    <h1>123456</h1>
                </div>
                <div class="xytle_caixa_nome">
                    <h1>Camisa Codifica+</h1>    
                </div>
                <div class="xytle_caixa_quantidade">
                    <h1>Quantidade: 100</h1>
                </div>
                <div class="xytle_caixa_editar">
                    <button>Editar</button>
                </div>
                <div class="xytle_caixa_deletar">
                    <button>Deletar</button>
                </div>
            </section>

        </section>
    </main>

</body>
</html>