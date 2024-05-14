function handleProductSubmission(event) {
    event.preventDefault(); // Evita o envio padrão do formulário
  
    // Coletar dados do formulário
    const nomeProduto = document.getElementById('nomeProduto').value;
    const fornecedor = document.getElementById('fornecedor').value;
    const valorCompra = parseFloat(document.getElementById('valorCompra').value);
    const valorVenda = parseFloat(document.getElementById('valorVenda').value);
  
    // Enviar dados do formulário para o PHP via AJAX
    sendProductData(nomeProduto, fornecedor, valorCompra, valorVenda);
  }
  
  function sendProductData(nomeProduto, fornecedor, valorCompra, valorVenda) {
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'config.php'); // Mude para a URL real do seu arquivo PHP
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
      if (xhr.status === 200) {
        // Processar resposta de sucesso (por exemplo, exibir uma mensagem de sucesso)
        alert('Produto adicionado com sucesso!');
        // Limpar os campos do formulário
        formularioAddProduto.reset();
      } else {
        // Processar resposta de erro (por exemplo, exibir uma mensagem de erro)
        alert('Erro ao adicionar produto: ' + xhr.responseText);
      }
    };
    xhr.send('nomeProduto=' + encodeURIComponent(nomeProduto) +
            '&fornecedor=' + encodeURIComponent(fornecedor) +
            '&valorCompra=' + valorCompra +
            '&valorVenda=' + valorVenda);
  }
  