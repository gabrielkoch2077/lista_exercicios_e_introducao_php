<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receber um número e exibir a sequência de Fibonacci até esse número</title>
</head>

<body>
    <form method="POST" action="">
        <label for="numero_informado"> Verificar a sequência de fibonnaci:</label>
        <input type="number" id="numero_informado" name="numero_informado" required>
        <button type="submit" name='sequencia_fibonacci'>Verificar</button>
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['sequencia_fibonacci'])) {
            $numero = $_POST['numero_informado'];

            $a = 0;
            $b = 1;
            $t = 0;

            while ($b < $numero) {
                echo $b . '<br / > ';
                $t = $a;
                $a = $b;
                $b = $t + $b;
            };
        };
    };
    ?>

</body>

</html>