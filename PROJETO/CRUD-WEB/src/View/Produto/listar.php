<?php


require_once __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../src/conectar_banco.php';

$sql1 = "SELECT * FROM produto";
$statement = $pdo -> query($sql1);
$produto = $statement -> fetchAll(PDO::FETCH_ASSOC);
var_dump($produto);


//$statement = $pdo->query(statement: 'SELECT * FROM produto;');
//$produtoDataList = $statement->fetchAll(fetch_style: PDO::FETCH_ASSOC);
//$produtoList = [];
//foreach ($produtoDataList as $produtoData) {
//    $produtoList[] = new ProdutosController(
//        $produtoData['id'],
//        $produtoData['nome'],
//        $produtoData['sku'],
//        $produtoData['unidade_medida_id'],
//        $produtoData['valor'],
//        $produtoData['quantidade'],
//        $produtoData['categoria_id'],
//    );
//}

//var_dump($studentList);

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
            <?php foreach ($produtos as $id => $produto): ?>
            <section class="xtyle_main_caixaconteudo">
                <div class="xytle_caixa_linha_1">
                    <h1># <?= $id ?></h1> 
                <div class="xtyle_caixa_linha_1_1">
                    <h1><?php echo $produto['sku'] ?></h1>
                </div>
                </div>
                <div class="xytle_caixa_linha_2">
                    <h1><?php echo $produto['nome'] ?></h1>    
                <div class="xytle_caixa_linha_2_1">
                    <h1>Quantidade: <?php echo $produto['quantidade'] ?></h1>
                </div>
                </div>
                <div class="xtyle__botoes__guia">
                    <div class="xytle_caixa_editar">
                        <a class="xtlye__botao__editar" href="/produtos/editar?id=<?= $id ?>">Editar</a>
                    </div>
                    <div class="xytle_caixa_deletar">
                        <a class="xtlye__botao__deletar" onclick="return confirm('Deseja deletar o registro?')" href="/produtos/deletar?id=<?= $id ?>" >Deletar</a>
                    </div>
                </div>
            </section>
            <?php endforeach; ?>

        </section>
    </main>

</body>
</html>