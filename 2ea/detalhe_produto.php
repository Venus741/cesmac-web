<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do produto</title>
    <link rel="stylesheet" href="styles/detalhe.css">
</head>
<body>
    <div id="container">
        <?php
            include 'produtos.php';
            $id = intval($_GET['id']);
        
            if (isset($produtos[$id])) {
                $produto = $produtos[$id];
                echo "<h1>" . htmlspecialchars($produto['nome']) . "</h1>";
                echo "<p>" . htmlspecialchars($produto['descricao']) . "</p>";
                echo "<p>Preço: R$ " . number_format($produto['preco'], 2, ',', '.') . "</p>";
            } else {
                echo "Produto não encontrado.";
            }
        ?>

        <button id="voltar" onclick="history.back()">Voltar</button>
    </div>
</body>
</html>