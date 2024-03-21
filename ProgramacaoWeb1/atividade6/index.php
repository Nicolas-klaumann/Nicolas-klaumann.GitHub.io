<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Soma</title>
</head>
<body>
    <h1>Descreva quantos kg Joãozinho pegou de cada fruta:</h1>
    <form method="post">
        <label for="kg_macas">Maça</label>
        <input type="number" id="kg_macas" name="kg_macas" required><br><br>

        <label for="kg_melancia">Melancia</label>
        <input type="number" id="kg_melancia" name="kg_melancia" required><br><br>

        <label for="kg_laranja">Laranja</label>
        <input type="number" id="kg_laranja" name="kg_laranja" required><br><br>

        <label for="kg_repolho">Repolho</label>
        <input type="number" id="kg_repolho" name="kg_repolho" required><br><br>

        <label for="kg_cenoura">Cenoura</label>
        <input type="number" id="kg_cenoura" name="kg_cenoura" required><br><br>

        <label for="kg_batatinha">Batatinha</label>
        <input type="number" id="kg_batatinha" name="kg_batatinha" required><br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    // verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $preco_macas = 4.0;
        $preco_melancia = 3.0;
        $preco_laranja = 2.0;
        $preco_repolho = 2.5;
        $preco_cenoura = 2.0;
        $preco_batatinha = 3.5;

        $kg_macas = $_POST['kg_macas'];
        $kg_melancia = $_POST['kg_melancia'];
        $kg_laranja = $_POST['kg_laranja'];
        $kg_repolho = $_POST['kg_repolho'];
        $kg_cenoura = $_POST['kg_cenoura'];
        $kg_batatinha = $_POST['kg_batatinha'];

        $valor_macas = $preco_macas * $kg_macas;
        $valor_melancia = $preco_melancia * $kg_melancia;
        $valor_laranja = $preco_laranja * $kg_laranja;
        $valor_repolho = $preco_repolho * $kg_repolho;
        $valor_cenoura = $preco_cenoura * $kg_cenoura;
        $valor_batatinha = $preco_batatinha * $kg_batatinha;

        // Valor total da compra
        $total_compra = $valor_macas + $valor_melancia + $valor_laranja + $valor_repolho + $valor_cenoura + $valor_batatinha;

        // Dinheiro disponível para Joãozinho
        $dinheiro_disponivel = 50.0;

        // Verifica se Joãozinho tem dinheiro suficiente
        if ($total_compra > $dinheiro_disponivel) {
            $diferenca = $total_compra - $dinheiro_disponivel;
            echo "<p style='color: red;'>Joãozinho gastou R$$total_compra, mas faltam R$$diferenca!</p>";
        } elseif ($total_compra == $dinheiro_disponivel) {
            echo "<p style='color: green;'>Saldo para compras esgotado.</p>";
        } else {
            $saldo = $dinheiro_disponivel - $total_compra;
            echo "<p style='color: blue;'>Joãozinho ainda pode gastar R$$saldo.</p>";
        }

        // Exibe o valor da compra
        echo "<p>O valor total da compra foi R$$total_compra.</p>";
    }
    ?>
</body>
</html>
