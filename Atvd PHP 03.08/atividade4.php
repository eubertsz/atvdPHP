<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>atvd 4</title>
</head>

<body>
    <?php
    const CREDENCIAIS = [
        'login' => 'admin',
        'senha' => '1234',
    ];

    $loginV = filter_input(INPUT_GET, 'login');
    $senhaV = filter_input(INPUT_GET, 'senha');

    $mensagem = '';
    if ($loginV !== null && $senhaV !== null) {
        $mensagem = ($loginV === CREDENCIAIS['login'] && $senhaV === CREDENCIAIS['senha'])
            ? '<p><strong>Login bem-sucedido</strong></p>'
            : '<p><strong>Login ou senha incorretos</strong></p>';
    }
    ?>
    <main>
        <h1>VERIFICAR LOGIN</h1><br>

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">

            <label for="login">Login</label>
            <input type="text" name="login" value="<?= $loginV ?>"><br><br>

            <label for="senha">Senha</label>
            <input type="password" name="senha" value="<?= $senhaV ?>"><br><br>

            <button type="submit">ENTRAR</button>

        </form><br>

        <?php if ($mensagem !== ''): ?>
            <section>
                <?= $mensagem ?>
            </section>
        <?php endif; ?>

    </main>

</body>

</html>