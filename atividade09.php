<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receber dois números e exibir a soma de todos os números entre eles</title>
</head>

<body>

    <form method="POST" action="">
        <label for="numero1">Digite um número</label>
        <input type="number" id="numero1" name="numero1" required>
        <label for="numero2">Digite um número</label>
        <input type="number" id="numero2" name="numero2" required>
        <button type="submit" name="verificar_numero_amigo">Somar os elementos entre os números informados</button>
    </form>

    <php
        if ($_SERVER["REQUEST_METHOD"]=="POST" ) {
        $num1=$_POST["numero1"];
        $num2=$_POST["numero2"];

        if (is_numeric($num1) && is_numeric($num2)) {
        $num1=$numero1;
        $num2=$numero2;

        $soma=0;
        for ($i=min($numero1, $numero2) + 1; $i < max($numero1, $numero2); $i++) {
        $soma +=$i;
        }

        echo "A soma dos números entre " . min($numero1, $numero2) . " e " . max($numero1, $numero2) . " é: " . $soma;
        } else
        echo "Por favor, insira números válidos." ;

        }
        ?>
</body>

</html>