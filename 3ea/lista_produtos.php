<?php
include 'conexao.php';

function buscarProdutos($pdo) {
    $sql = "SELECT * FROM produtos";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

$produtos = buscarProdutos($pdo);
foreach ($produtos as $produto) {
    echo "<p>ID: " . $produto['id'] . " - Nome: " . $produto['nome'] . " - Preço: R$ " . $produto['preco'] . "</p>";
    echo "<a href='remover_produto.php?id=" . $produto['id'] . "'>Remover</a> | ";
    echo "<a href='alterar.php?id=" . $produto['id'] . "'>Alterar</a>";
}
?>
