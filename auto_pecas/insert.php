<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nomeProduto = $_POST['nomeProduto'];
    $fornecedor = $_POST['fornecedor'];
    $valorCompra = $_POST['valorCompra'];
    $valorVenda = $_POST['valorVenda'];
    $url_imagem = $_POST['url_imagem'];

    $stmt = $conn->prepare("INSERT INTO produtos (nomeProduto, fornecedor, valorCompra, valorVenda, url_imagem) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssdds", $nomeProduto, $fornecedor, $valorCompra, $valorVenda, $url_imagem);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "[!] Produto cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar o produto.";
    }

    $stmt->close();

    $dataCadastro = date("Y-m-d");
    $stmt = $conn->prepare("INSERT INTO cadastro (nomeProduto, dataCadastro) VALUES (?, ?)");
    $stmt->bind_param("ss", $nomeProduto, $dataCadastro);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "Produto adicionado ao calendário.";
    } else {
        echo "Erro ao adicionar produto ao calendário.";
    }

    $stmt->close();

    header("Location: cadastro.php");
    exit();
}
?>
