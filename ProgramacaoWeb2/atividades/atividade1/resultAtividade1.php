<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento do Formulário</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Dados Enviados</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "<h2>Método Utilizado: POST</h2>";
            echo "<h2>Cabeçalho da Requisição:</h2>";
            foreach (getallheaders() as $name => $value) {
                echo "<strong>$name:</strong> $value <br>";
            }
            echo "<h2>Dados do Formulário:</h2>";
            echo "<p><strong>Nome:</strong> " . $_POST["nome"] . "</p>";
            echo "<p><strong>Telefone:</strong> " . $_POST["telefone"] . "</p>";
            echo "<p><strong>E-mail:</strong> " . $_POST["email"] . "</p>";
            echo "<p><strong>Mensagem:</strong> " . $_POST["mensagem"] . "</p>";
        } else {
            echo "<h2>Método Utilizado: GET</h2>";
            echo "<h2>Cabeçalho da Requisição:</h2>";
            foreach (getallheaders() as $name => $value) {
                echo "<strong>$name:</strong> $value <br>";
            }
            echo "<h2>Dados da URL:</h2>";
            echo "<p><strong>Nome:</strong> " . $_GET["nome"] . "</p>";
            echo "<p><strong>Telefone:</strong> " . $_GET["telefone"] . "</p>";
            echo "<p><strong>E-mail:</strong> " . $_GET["email"] . "</p>";
            echo "<p><strong>Mensagem:</strong> " . $_GET["mensagem"] . "</p>";
        }
        ?>
    </div>
</body>
</html>
