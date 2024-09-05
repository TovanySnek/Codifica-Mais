<?php


 //                    $produto->getId()

    $produtos = [[
            'id' => "#000001",
            'categoria' => "Vestuário",
            'sku' => "123456",   
            'nome' => "Camisa Codifica+",
            'quantidade' => "Quantidade: 100" 

        ],[
            'id' => '#000002',
            'categoria' => 'Eletrodomésticos',
            'sku' => '123457',
            'nome' => 'Geladeira',
            'quantidade' => 'Quantidade: 5'

        ],[
            'id' => '#000003',
            'categoria' => 'Eletrônicos',
            'sku' => '124487',
            'nome' => 'Smartphone',
            'quantidade' => 'Quantidade: 15'
        ]
    ];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de produtos</title>
    <link rel="stylesheet" href="/css/styleListagem.css">
</head>
<body>
       
    <header>
        <section class="xtlye__header__guia">
            <a class="xtlye__header__link" href="/produtos/criar">Novo Item</a>
            <section class="xtyle__header__busca">
                <input type="text" class="xtlye__busca__imput" placeholder="Buscar..."/>
                <button class="xtlye__busca__botao">Buscar</button>
            </section>    
        </section>

    </header>

    <main>
        <section class="xtlye_main_guia">
            <?php foreach ($produtos as $item): ?>
            <section class="xtyle_main_caixaconteudo">
                <div class="xytle_caixa_linha_1">
                    <h1><?php echo $item['id'] ?></h1> 
                    <h1><?php echo $item['categoria'] ?></h1>
                <div class="xtyle_caixa_linha_1_1">
                    <h1><?php echo $item['sku'] ?></h1>
                </div>
                </div>
                <div class="xytle_caixa_linha_2">
                    <h1><?php echo $item['nome'] ?></h1>    
                <div class="xytle_caixa_linha_2_1">
                    <h1><?php echo $item['quantidade'] ?></h1>
                </div>
                </div>
                <div class="xtyle__botoes__guia">
                    <div class="xytle_caixa_editar">
                        <a class="xtlye__botao__editar" href="/produtos/editar">Editar</a>
                    </div>
                    <div class="xytle_caixa_deletar">
                        <button class="xtlye__botao__deletar">Deletar</button>
                    </div>
                </div>
            </section>
            <?php endforeach; ?>

        </section>
    </main>

</body>
</html>