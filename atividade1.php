<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>atvd 1</title>
</head>

<body>
    <?php
    $anosV = filter_input(INPUT_GET, 'idade', FILTER_VALIDATE_INT) ?? null;
    ?>
    <main>
        <h1>VERIFICAR IDADE</h1><br>

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">

            <label for="idade">Insira a sua idade</label>
            <input type="number" name="idade" value="<?= $anosV ?>"><br><br>
            <button type="submit">CONFIRMAR</button>

        </form><br>
        <?php if ($anosV !== null) : ?>

            <section>
                <h2>IDADE VERIFICADA</h2>
                <?php
                echo "<p>Sua idade é de $anosV anos</p>";
                if ($anosV < 18) {
                    echo "<p>Seu cadastro foi <strong>NEGADO</strong></p>";
                } elseif ($anosV >= 18) {
                    echo "<p>Seu cadastro foi <strong>APROVADO</strong></p>";
                }
                ?>
            </section>

        <?php endif; ?>

    </main>

</body>

</html>