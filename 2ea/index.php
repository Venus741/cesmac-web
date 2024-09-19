<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina principal</title>
    <link rel="stylesheet" href="styles/index.css">
</head>
<body>
    <?php 
        include 'produtos.php';

        foreach ($produtos as $index => $produto) {
            echo "<div>";
            echo "<h2>" . htmlspecialchars($produto['nome']) . "</h2>";
            echo "<a href='detalhe_produto.php?id=" . $index . "'>Ver detalhes</a>";
            echo "</div><hr>";
        }
    ?>
</body>
</html>