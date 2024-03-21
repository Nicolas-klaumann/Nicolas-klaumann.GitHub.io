<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Soma</title>
</head>
<body>
    <h1>Calcular se um número é divisivel por 2</h1>
    <form method="post">
        <label for="valor">Valor:</label>
        <input type="number" id="valor" name="valor" required><br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    // verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor = $_POST['valor'];

        // valida se o numero é divisivel por 2
        if ($valor % 2 == 0) {
            echo "<p>O numero $valor <b>É</b> divisivel por 2</p>";
        } else {
            echo "<p>O numero $valor <b>NÃO</b> é divisivel por 2</p>";
        }
    }
    ?>
</body>
</html>
