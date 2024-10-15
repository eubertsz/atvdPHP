<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>atvd 2</title>
</head>

<body>
    <?php
    $classNota = filter_input(INPUT_GET, 'nota', FILTER_VALIDATE_INT);
    ?>
    <main>
        <h1>CLASSIFICAÇÃO DE NOTAS</h1><br>

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">

            <label for="nota">Insira a sua nota</label>
            <input type="number" name="nota" value="<?= $classNota ?>"><br><br>
            <button type="submit">CONFIRMAR</button>

        </form><br>

        <?php if ($classNota !== false && $classNota !== null): ?>
            <section>
                <h2>NOTA CONQUISTADA</h2>
                <?php
                $notas = [
                    'E' => range(0, 4),
                    'D' => range(5, 6),
                    'C' => range(7, 8),
                    'B' => [9],
                    'A' => [10],
                ];

                foreach ($notas as $nota => $faixa) {
                    if (in_array($classNota, $faixa)) {
                        echo "<p>Sua nota foi <strong>$nota</strong>";
                        break;
                    }
                }
                ?>
            </section>
        <?php endif; ?>

    </main>

</body>

</html>