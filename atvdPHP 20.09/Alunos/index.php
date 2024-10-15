<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota dos Alunos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #1c1c1e;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #f1f1f1;
        }

        h1 {
            color: #ff4757;
            font-weight: bold;
            margin-bottom: 30px;
            text-align: center;
        }

        .container {
            background-color: #2f3542;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            max-width: 700px;
            margin: 50px auto;
        }

        .form-group label {
            font-weight: 600;
            color: #ffa502;
        }

        .form-control {
            background-color: #57606f;
            border: 2px solid #ffa502;
            color: #f1f1f1;
            border-radius: 10px;
            padding: 12px;
        }

        .form-control:focus {
            border-color: #ff6348;
            box-shadow: 0 0 10px rgba(255, 99, 72, 0.5);
            outline: none;
        }

        .btn-primary {
            background-color: #ff4757;
            border: none;
            border-radius: 12px;
            padding: 12px;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.3s;
        }

        .btn-primary:hover {
            background-color: #ff6b81;
            transform: translateY(-3px);
        }

        .result-container {
            margin-top: 30px;
            padding: 25px;
            background-color: #2f3542;
            border-radius: 12px;
            border: 2px solid #ffa502;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3);
        }

        .result-container h2 {
            font-weight: bold;
            color: #ffa502;
            margin-bottom: 20px;
        }

        .result-container p {
            color: #f1f1f1;
            font-size: 1.1rem;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1>Cadastro de Alunos</h1>

        <form method="post">
            <?php for ($i = 1; $i <= 10; $i++): ?>
                <div class="form-group">
                    <label for="nome<?php echo $i; ?>">Nome do Aluno <?php echo $i; ?>:</label>
                    <input type="text" class="form-control" name="nome[]" required>
                </div>
                <div class="form-group">
                    <label for="nota<?php echo $i; ?>">Nota do Aluno <?php echo $i; ?>:</label>
                    <input type="number" class="form-control" name="nota[]" step="0.01" min="0" max="10" required>
                </div>
            <?php endfor; ?>
            <button type="submit" class="btn btn-primary btn-block">Enviar</button>
        </form>

        <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
            <div class="result-container">
                <h2>Resultados:</h2>
                <?php
                $nomes = $_POST['nome'];
                $notas = $_POST['nota'];
                $somaNotas = 0;
                $maiorNota = 0;
                $nomeMaiorNota = '';

                for ($i = 0; $i < 10; $i++) {
                    $somaNotas += (float)$notas[$i];
                    if ((float)$notas[$i] > $maiorNota) {
                        $maiorNota = (float)$notas[$i];
                        $nomeMaiorNota = $nomes[$i];
                    }
                }

                $media = $somaNotas / 10;

                echo "<p>Média da classe: <strong>" . number_format($media, 2, ',', '.') . "</strong></p>";
                echo "<p>Aluno com maior nota: <strong>$nomeMaiorNota</strong> (Nota: " . number_format($maiorNota, 2, ',', '.') . ")</p>";
                ?>
            </div>
        <?php endif; ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
