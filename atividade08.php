<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contar quantos números pares existem entre 1 e o número informado</title>
</head>
<body>
    <form method="POST" action="">
        <label for = "numero_par"> Mostrar os números pares entre 1 e o número informado:</label>
        <input type="number" id="numero_par" name="numero_par" required>
        <button type="submit" name="verificar_pares">Verificar números</button>
    </form>

        <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['verificar_pares'])) {
            $numero = $_POST['numero_par'];
            for($i = 1; $i <= $numero; $i++){
                if($i % 2 == 0){
                    echo"<br>";
                    echo $i . " ";
                };
            };
            };
        };
    ?>