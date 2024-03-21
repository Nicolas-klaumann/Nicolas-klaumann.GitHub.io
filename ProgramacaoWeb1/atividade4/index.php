<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Soma</title>
</head>
<body>
    <h1>tamanho da altura e largura do retangulo:</h1>
    <form method="post">
        <label for="altura">Altura:</label>
        <input type="number" id="altura" name="altura" required><br><br>

        <label for="largura">Largura:</label>
        <input type="number" id="largura" name="largura" required><br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    // verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $largura = $_POST['largura'];
        $altura = $_POST['altura'];

        $resultado = $altura * $largura;

        if ($resultado > 10) {
            echo "<h1>A area do retangulo é: $resultado</h1>";
        } else {
            echo "<h3>A area do retangulo é: $resultado</h3>";
        }
    }
    ?>
</body>
</html>
