<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Análise de Números</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #1e272e;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #f5f6fa;
        }

        h1 {
            color: #ff6b6b;
            font-weight: bold;
            text-align: center;
            margin-bottom: 40px;
        }

        .container {
            background-color: #2f3640;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.5);
            max-width: 700px;
            margin: 50px auto;
        }

        .form-group label {
            font-weight: 600;
            color: #ff9f43;
        }

        .form-control {
            background-color: #576574;
            border: 2px solid #ff9f43;
            color: #f5f6fa;
            border-radius: 10px;
            padding: 12px;
        }

        .form-control:focus {
            border-color: #ff6b6b;
            box-shadow: 0 0 10px rgba(255, 107, 107, 0.5);
            outline: none;
        }

        .btn-primary {
            background-color: #ff6b6b;
            border: none;
            border-radius: 12px;
            padding: 12px;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.3s;
        }

        .btn-primary:hover {
            background-color: #ff4757;
            transform: translateY(-3px);
        }

        .result-container {
            margin-top: 30px;
            padding: 25px;
            background-color: #576574;
            border-radius: 12px;
            border: 2px solid #ff9f43;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3);
        }

        .result-container h2 {
            font-weight: bold;
            color: #ff9f43;
            margin-bottom: 20px;
        }

        .result-container p {
            color: #f5f6fa;
            font-size: 1.1rem;
        }

        @media (max-width: 576px) {
            .container {
                padding: 20px;
            }

            h1 {
                font-size: 1.8rem;
            }
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1>Análise de Números</h1>

        <form method="post">
            <?php for ($i = 1; $i <= 10; $i++): ?>
                <div class="form-group">
                    <label for="numero<?php echo $i; ?>">Número <?php echo $i; ?>:</label>
                    <input type="number" class="form-control" name="numeros[]" required>
                </div>
            <?php endfor; ?>
            <button type="submit" class="btn btn-primary btn-block">Enviar</button>
        </form>

        <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
            <div class="result-container">
                <h2>Resultados:</h2>
                <?php
                $numeros = $_POST['numeros'];
                $positivos = 0;
                $negativos = 0;
                $pares = 0;
                $impares = 0;

                foreach ($numeros as $numero) {
                    if ($numero >= 0) {
                        $positivos++;
                    } else {
                        $negativos++;
                    }

                    if ($numero % 2 == 0) {
                        $pares++;
                    } else {
                        $impares++;
                    }
                }

                echo "<p>Quantidade de números positivos: <strong>$positivos</strong></p>";
                echo "<p>Quantidade de números negativos: <strong>$negativos</strong></p>";
                echo "<p>Quantidade de números pares: <strong>$pares</strong></p>";
                echo "<p>Quantidade de números ímpares: <strong>$impares</strong></p>";
                ?>
            </div>
        <?php endif; ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
