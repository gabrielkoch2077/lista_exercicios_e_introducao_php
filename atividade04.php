<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular o fatorial de um número</title>
</head>

<body>

    <form method="POST" action="">
        <label for="numero_para_fatorial">Calcular o fatorial de um número</label>
        <input type="number" id="numero_para_fatorial" name="numero_para_fatorial" required>
        <button type="submit" name="calcular_o_fatorial">Verificar</button>
    </form>
    <?php
     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['calcular_o_fatorial'])) {
            $numero = $_POST['numero_para_fatorial'];
            $fatorial = 1;
            $count = 1;

            while($count <= $numero){
                $fatorial*= $count;
                $count++;

            }
            echo "O fatorial é $fatorial";
        };
    };
    ?>
</body>

</html>