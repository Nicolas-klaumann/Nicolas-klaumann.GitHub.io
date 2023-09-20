<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Soma</title>
</head>
<body>
    <h1>Calculadora de Soma</h1>
    <form method="post">
        <label for="valor1">Valor 1:</label>
        <input type="number" id="valor1" name="valor1" required><br><br>

        <label for="valor2">Valor 2:</label>
        <input type="number" id="valor2" name="valor2" required><br><br>

        <label for="valor3">Valor 3:</label>
        <input type="number" id="valor3" name="valor3" required><br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    // Verifique se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtenha os valores do formulário
        $valor1 = $_POST["valor1"];
        $valor2 = $_POST["valor2"];
        $valor3 = $_POST["valor3"];

        // Calcule a soma dos valores
        $soma = $valor1 + $valor2 + $valor3;

        // Defina a cor padrão como preta
        $corTexto = "black";

        // Verifique as condições e atualize a cor do texto
        if ($valor1 > 10) {
            $corTexto = "blue";
        }
        if ($valor2 < $valor3) {
            $corTexto = "green";
        }
        if ($valor3 < $valor1 && $valor3 < $valor2) {
            $corTexto = "red";
        }

        // Imprima o resultado com a cor definida
        echo "<p style='color: $corTexto;'>A soma dos valores é: $soma</p>";
    }
    ?>
</body>
</html>
