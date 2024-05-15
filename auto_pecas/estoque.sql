use estoque;

create table produtos (
id INT primary key auto_increment,
nomeProduto varchar(255),
fornecedor varchar(75),
valorCompra int,
valorVenda int,
url_imagem varchar(255)
);

CREATE TABLE cadastro (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nomeProduto VARCHAR(255) NOT NULL,
    dataCadastro DATE NOT NULL
);