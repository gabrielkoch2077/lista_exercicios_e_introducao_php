<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar se dois números formam um número amigo</title>
</head>
<body>

    <form method="POST" action="">
        <label for="numero1">Verifica se dois números formam um número amigo (soma dos divisores de um é igual ao outro)</label><br>
        <input type="number" id="numero1" name="numero1" required>
        <input type="number" id="numero2" name="numero2" required>
        <button type="submit" name="verificar_numero_amigo">Verificar</button>
    </form>

    <?php
    function somaDivisores($numero) {
        $soma = 0;
        for ($i = 1; $i <= $numero / 2; $i++) {
            if($numero % $i == 0) {
                $soma += $i;
            }
        }
        return $soma;
    }

    function saoAmigos($numero1, $numero2) {
        $soma1 = somaDivisores($numero1);
        $soma2 = somaDivisores($numero2);

        return ($soma1 == $numero2 && $soma2 == $numero1);
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['verificar_numero_amigo'])) {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];

        if (saoAmigos($numero1, $numero2)) {
            echo "<p>$numero1 e $numero2 são números amigos</p>";
        } else {
            echo "<p>$numero1 e $numero2 não são números amigos</p>";
        }
    }
    ?>
</body>
</html>