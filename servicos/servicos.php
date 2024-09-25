<?php require "../parts/nav.php"; ?>

<style>
    #cards {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-top: 70px;
        margin-bottom: 160px;
    }

    body {
        height: auto;
    }

    .plan {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 20px;
        width: 400px;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    h2 {
        margin-top: 0;
        color: #333;
    }

    p {
        margin: 10px 0;
        color: #666;
    }

    header {
        background: #001620;
        color: #fff;
        padding: 10px 0;
        text-align: center;
    }

    header h1 {
        margin: 0;
    }

    .button {
        background-color: #44db33;
        border: none;
        color: white;
        padding: 15px 30px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        border-radius: 8px;
        transition: background-color 0.3s, transform 0.3s;
    }

    .button:hover {
        background-color: #2980b9;
        transform: scale(1.05);
    }

    .vlr {
        color: #3498db;
        font-size: 2rem;
    }
</style>

<body id="top">
    <div class="preloader" data-preloader>
        <div class="circle"></div>
    </div>

    <header>
        <h1 data-reveal="left">Nossos Planos</h1>
    </header>

    <div class="container" id="cards" data-reveal="left">
        <div class="plan">
            <ul>
                <h1 style=" color: #3498db; margin-bottom: 40px;">Plano Mensal</h1>
                <li>Acesso Pelo Celular</li>
                <li>Gerenciamento Administrativo</li>
                <li>Controle de Matrículas</li>
                <li>Agendamento de Aulas</li>
                <li>Relatórios Financeiros</li>
                <li>Check-in Automático</li>
                <li>12x de</li>
                <li>
                    <p><span class="vlr">R$550/mês</span></p>
                </li>
                <li><a href="../cliente/index.php" class="button">Teste Grátis</a></li>
            </ul>
        </div>
        <div class="plan">
            <ul>
                <h1 style=" color: #3498db; margin-bottom: 40px;">Plano Trimensal</h1>
                <li>Acesso Pelo Celular</li>
                <li>Gerenciamento Administrativo</li>
                <li>Controle de Matrículas</li>
                <li>Agendamento de Aulas</li>
                <li>Relatórios Financeiros</li>
                <li>Check-in Automático</li>
                <li>3x de</li>
                <li>
                    <p><span class="vlr">R$480/mês</span></p>
                </li>
                <li><a href="../cliente/index.php" class="button">Teste Grátis</a></li>
            </ul>
        </div>
        <div class="plan">

            <ul>
                <h1 style=" color: #3498db; margin-bottom: 40px;">Plano Anual</h1>
                <li>Acesso Pelo Celular</li>
                <li>Gerenciamento Administrativo</li>
                <li>Controle de Matrículas</li>
                <li>Agendamento de Aulas</li>
                <li>Relatórios Financeiros</li>
                <li>Check-in Automático</li>
                <li>12x de</li>
                <li>
                    <p><span class="vlr">R$400/mês</span></p>
                </li>
                <li><a href="../cliente/index.php" class="button">Teste Grátis</a></li>
            </ul>
        </div>
    </div>

    <?php require "../parts/footer.php"; ?>
</body>