<?php

// Detalhes de conexão com o banco de dados (substitua pelas suas informações reais)
$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "estoque";

// Conectar ao banco de dados
$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

// Verificar se houve erros de conexão
if (!$conn) {
  die("Falha na conexão: " . mysqli_connect_error());
}

// Receber dados do formulário da solicitação POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nomeProduto = mysqli_real_escape_string($conn, $_POST['nomeProduto']);
  $fornecedor = mysqli_real_escape_string($conn, $_POST['fornecedor']);
  
  // Conversão de tipos para int
  $valorCompra = intval($_POST['valorCompra']);
  $valorVenda = intval($_POST['valorVenda']);
  
  // Criação da consulta SQL com os tipos de dados corretos
  $sql = "INSERT INTO produtos (nome_produto, fornecedor, valor_compra, valor_venda) 
          VALUES ('$nomeProduto', '$fornecedor', $valorCompra, $valorVenda)";
  

  // Executar a consulta
  if (mysqli_query($conn, $sql)) {
    echo "Produto adicionado com sucesso!";
  } else {
    echo "Erro ao adicionar produto: " . mysqli_error($conn);
  }
}

// Fechar a conexão com o banco de dados
mysqli_close($conn);

?>;
