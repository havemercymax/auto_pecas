<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="scripts.js"></script>
        <title>BAD BOY - Cadastrar Peças</title>
</head>

<body>
    <section>
        <div class="container">
            <h2>Adicionar Novo Produto</h2>
            <form action="insert.php" method="post" >
                <div>
                    <label for="nomeProduto">Nome do Produto:</label>
                    <input type="text" id="nomeProduto" name="nomeProduto" required>
                </div>
                <div>
                    <label for="fornecedor">Fornecedor:</label>
                    <input type="text" id="fornecedor" name="fornecedor" required>
                </div>
                <div>
                    <label for="valorCompra">Valor de Compra:</label>
                    <input type="number" id="valorCompra" name="valorCompra" step="0.01" required>
                </div>
                <div>
                    <label for="valorVenda">Valor da Venda:</label>
                    <input type="number" id="valorVenda" name="valorVenda" step="0.01" required>
                </div>
                <div>
                    <label for="url_imagem">URL Imagem:</label>
                    <input type="text" id="url_imagem" name="url_imagem" required>
                </div>
                <button type="submit">Adicionar Produto</button>
            </form>
        </div>

        <div class="container">
        <h2 class="mt-5 mb-4">Calendário de Cadastro de Peças</h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <?php
            if (!empty($calendar)) {
                foreach ($calendar as $data => $pecas) {
                    echo '<div class="col">';
                    echo '<div class="card h-100">';
                    echo '<div class="card-body">';
                    echo "<h5 class='card-title'>$data</h5>";
                    echo "<ul class='list-group list-group-flush'>";
                    foreach ($pecas as $peca) {
                        echo "<li class='list-group-item'>$peca</li>";
                    }
                    echo "</ul>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
            } else {
                echo '<div class="col">';
                echo '<div class="card h-100">';
                echo '<div class="card-body">';
                echo "<p>Nenhuma peça cadastrada ainda.</p>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
            ?>
        </div>
    </div>
    </section>
</body>

</html>