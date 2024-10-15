<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>atvd 3</title>
</head>

<body>
    <?php
    $valor1 = filter_input(INPUT_GET, 'v1', FILTER_VALIDATE_FLOAT);
    $valor2 = filter_input(INPUT_GET, 'v2', FILTER_VALIDATE_FLOAT);
    $calcular = filter_input(INPUT_GET, 'calcular');
    ?>
    <main>
        <h1>CALCULADORA BÁSICA</h1><br>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?= $valor1 ?>"><br><br>
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?= $valor2 ?>"><br><br>

            <button type="submit" name="calcular" value="somar">SOMAR</button>
            <button type="submit" name="calcular" value="subtrair">SUBTRAIR</button>
            <button type="submit" name="calcular" value="multiplicar">MULTIPLICAR</button>
            <button type="submit" name="calcular" value="dividir">DIVIDIR</button>
        </form>
    </main>

    <?php if ($valor1 !== false && $valor2 !== false && $calcular !== null): ?>
        <section id="resultado">
            <h2>RESULTADO DO CÁLCULO</h2>
            <?php
            $operacoes = [
                'somar' => function ($a, $b) { return $a + $b; },
                'subtrair' => function ($a, $b) { return $a - $b; },
                'multiplicar' => function ($a, $b) { return $a * $b; },
                'dividir' => function ($a, $b) { return $b !== 0 ? $a / $b : 'Erro: Divisão por zero'; },
            ];

            $calculo = $operacoes[$calcular]($valor1, $valor2);
            echo "<p>O resultado da operação $calcular entre o número $valor1 e o número $valor2 é igual a $calculo</p>";
            ?>
        </section>
    <?php endif; ?>

</body>

</html>