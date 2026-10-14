<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 4</title>
</head>
<body>
    <h2>Lista de Números Pares</h2>
    <form method="post">
        Informe o número limite: <input type="number" name="valor" min="0" required>
        <br><br>
        <input type="submit" value="Listar Pares">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $valor = intval($_POST["valor"]);

        echo "<hr>";
        echo "Números pares de 0 até <strong>" . $valor . "</strong>:<br><br>";

        for ($i = 0; $i <= $valor; $i += 2) {
            echo $i . " ";
        }
    }
    ?>
</body>
</html>