<?php
include 'conexao.php';

function buscarProdutoPorId($pdo, $id) {
    $sql = "SELECT * FROM produtos WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function atualizarProduto($pdo, $id, $nome, $preco) {
    $sql = "UPDATE produtos SET nome = :nome, preco = :preco WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':preco', $preco);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
}

if (isset($_POST['alterar'])) {
    atualizarProduto($pdo, $_POST['id'], $_POST['nome'], $_POST['preco']);
    header("Location: lista_produtos.php");
}

if (isset($_GET['id'])) {
    $produto = buscarProdutoPorId($pdo, $_GET['id']);
}
?>

<form method="POST" action="">
    <input type="hidden" name="id" value="<?php echo $produto['id']; ?>">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" value="<?php echo $produto['nome']; ?>" required>
    <label for="preco">Preço:</label>
    <input type="text" name="preco" value="<?php echo $produto['preco']; ?>" required>
    <button type="submit" name="alterar">Alterar</button>
</form>
