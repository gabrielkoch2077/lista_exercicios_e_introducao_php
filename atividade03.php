<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informar se um número é positivo, negativo ou zero</title>
</head>

<body>

    <form method="POST" action="">
        <label for="numero_positivo">Verifica se o seu número é positivo, negativo ou zero:</label>
        <input type="number" id="numero_positivo" name="numero_positivo" required>
        <button type="submit" name="verificar_numero">Verificar</button>
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['verificar_numero'])) {
            $numero = $_POST['numero_positivo'];
            $ehPositivo = true;
            if ($numero > 0) {
                $ehPositivo = true;
                echo 'O número é positivo';
            } elseif ($numero < 0) {
                $ehPositivo = false;

                echo 'O número é negativo';
            } elseif ($numero == 0) {
                echo "O número:" . ($ehPositivo ? 'é zero' : 'não é zero');
            };
        };
    };
    ?>

</body>

</html>