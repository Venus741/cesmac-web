<?php
include 'conexao.php';

function removerProduto($pdo, $id) {
    $sql = "DELETE FROM produtos WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
}

if (isset($_GET['id'])) {
    removerProduto($pdo, $_GET['id']);
    header("Location: lista_produtos.php");
}
?>
