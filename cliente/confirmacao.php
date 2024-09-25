<?php
require "../links/head.php";
require "../parts/nav.php";
?>
<style>
    header {
        background: #001620;
        color: #fff;
        padding: 10px 0;
        text-align: center;
    }

    header h1 {
        margin: 0;
    }

    body {
        height: auto;
    }
</style>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação de Cadastro</title>
</head>

<body>
    <header>
        <h1>Cadastro Realizado com Sucesso!</h1>
    </header>
    <div class="container mt-3">
        <h3>Por favor, verifique a caixa de entrada do email <strong><?php echo htmlspecialchars($_GET['email']); ?></strong> para ter acesso ao sistema.</p>
            <h3>Se você não receber um email em alguns minutos, verifique sua pasta de spam.</p>
    </div>
</body>

</html>