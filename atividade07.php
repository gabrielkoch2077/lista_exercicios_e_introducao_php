<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Como Verificar se o número é perfeito (soma dos divisores = número)</title>
</head>
<body>
    <form method="POST" action="">
        <label for = "numero_perfeito"> Verifica se o número é perfeito:</label>
        <input type="number" id="numero_perfeito" name="numero_perfeito" required>
        <button type="submit" name="verificar_numero_perfeito">Verificar</button>
</body>

<?php

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if (isset($_POST['verificar_numero_perfeito'])) {
                $numero = $_POST['numero_perfeito'];

                function somaDosDivisores($numero)
                {
                    $soma_divisores = 0;
                    for ($i = 1; $i <= $numero / 2; $i++) {
                        if ($numero % $i == 0) {
                            $soma_divisores += $i;
                        }
                    }
                    return $soma_divisores;
                }

                function ehPerfeito($numero)
                {
                    $soma_divisores = somaDosDivisores($numero);                  

                    return ($soma_divisores == $numero);
                }

                echo "<br>";
                
                if (ehPerfeito($numero)) {
                    echo "$numero é perfeito.";
                } else {
                    echo "$numero não é perfeito.";
                }
            };
                };

        ?>

</html>