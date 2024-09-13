<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <h1>Conversão de Temperatura</h1>
        <form action="" method="post">

            <label for="Ftemp"> Insira um valor em Fahrenheit</label>
            <input type="number" id="Ftemp" name="Ftemp" required>
        </form>
        <button type="submit">Converter para Celsius</button>

    </main>
    <?php

    $numF = $_POST['Ftemp'];

    function calculo($num)
    {

        $numC = ($num - 32) * 5 / 9;

        return $numC;
    }
    echo "Resultado :" . calculo($numF);

    ?>


</body>

</html>