<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>FUNÇÃO ATIVIDADE 2</title>
</head>


<body>
    <?php
    $pegarValor = $_GET['dol'] ?? null;

    ?>

    <main>
        <h1>CONVERSOR DE MOEDAS</h1><br>

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">

            <label for="dol">Quantia em Dólar</label>
            <input type="number" name="dol" step="0.01"><br><br>
            <button type="submit">CONFIRMAR</button>
        </form><br>
    </main>

    <?php if ($pegarValor !== null): ?>
        <section>
            <h2>RESULTADO</h2>
            <?php
            echo "$$pegarValor Dólares é igual a R$" . conversorDol() . " Reais";
            ?>
        </section>

    <?php endif; ?>
    <?php
            function conversorDol()
            {
                $dolar = 1.81;
        
                $dolReal = $_GET['dol'] ?? null;
                $real = $dolReal * $dolar;
        
                return $real = round($real, 2);
            }
    ?>
</body>

</html>