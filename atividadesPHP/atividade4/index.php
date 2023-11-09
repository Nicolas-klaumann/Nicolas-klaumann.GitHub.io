<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Soma</title>
</head>
<body>
    <h1>tamanho de um dos lados a da base do triangulo:</h1>
    <form method="post">
        <label for="valorBase">Valor base:</label>
        <input type="number" id="valorBase" name="valorBase" required><br><br>

        <label for="valorLado">Valor lado:</label>
        <input type="number" id="valorLado" name="valorLado" required><br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    // verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valorLado = $_POST['valorLado'];
        $valorBase = $_POST['valorBase'];

        $resultado = ($valorBase * $valorLado) / 2;
        echo "<p>A area do triangulo é: $resultado</p>";
    }
    ?>
</body>
</html>
