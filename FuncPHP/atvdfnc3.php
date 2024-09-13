<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>FUNÇÃO ATIVIDADE 3</title>
</head>

        <?php
    function pesoIdealChecar()
    {
        $pesoIdeal = 0;

        $pegarValor1 = $_GET['genero'] ?? null;
        $pegarValor2 = $_GET['altura'] ?? null;
        if ($pegarValor1 == 2) {
            $pesoIdeal = (72.2 * $pegarValor2) - 58;
        } elseif ($pegarValor1 == 3) {
            $pesoIdeal = (62.1 * $pegarValor2) - 44.7;
        }

        return $pesoIdeal = round($pesoIdeal, 2);
    }
    ?>
<body>
    <?php
    $pegarValor1 = $_GET['genero'] ?? null;
    $pegarValor2 = $_GET['altura'] ?? null;

    ?>

    <main>
        <h1>PESO IDEAL</h1><br>

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">

            <label for="genero">Indique o seu sexo</label>
            <select name="genero">
                <option name="genero" value="1">Escolha</option>
                <option name="genero" value="2">Masculino</option>
                <option name="genero" value="3">Feminino</option>
            </select>

            <label for="altura">Sua Altura</label>
            <input type="number" name="altura" step="0.01"><br><br>
            <button type="submit">CONFIRMAR</button>
        </form><br>
    </main>

    <?php if ($pegarValor1 !== null || $pegarValor2 !== null): ?>
        <section>
            <h2>RESULTADO</h2>
            <?php
            echo "O seu peso ideal é de " . pesoIdealChecar() . "Kg";
            ?>

        </section>

    <?php endif; ?>

</body>

</html>