<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Soma</title>
</head>
<body>
    <h1>tamanho de um dos lados do quadrado:</h1>
    <form method="post">
        <label for="valor">Valor:</label>
        <input type="number" id="valor" name="valor" required><br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    // verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor = $_POST['valor'];

        $resultado = $valor * $valor;
        echo "<p>A area do quadrado é: $resultado</p>";
    }
    ?>
</body>
</html>
