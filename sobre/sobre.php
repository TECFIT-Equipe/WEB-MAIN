<?php require "../parts/nav.php" ?>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    background-color: #f4f4f4;
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

main {
    max-width: 900px;
    margin: 20px auto;
    padding: 20px;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-top: 70px;
    margin-bottom: 160px;
}

h2 {
    color: #333;
    margin-bottom: 10px;
}

.about-us,
.mission-values,
.team {
    margin-bottom: 30px;
}

.mission-values ul {
    list-style: none;
    padding: 0;
}

.mission-values li {
    background: #eee;
    margin: 5px 0;
    padding: 10px;
    border-radius: 4px;
}

.team {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}

.team-member {
    flex: 1;
    max-width: 250px;
    text-align: center;
}

.team-member img {
    width: 100%;
    height: auto;
    border-radius: 50%;
    margin-bottom: 10px;
}

.team-member h3 {
    margin: 10px 0 5px;
}
</style>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body id="top">
    <div class="preloader" data-preloader>
        <div class="circle"></div>
    </div>
    <header>
        <h1 data-reveal="left">Sobre Nós</h1>
    </header>

    <main data-reveal="left">
        <section class="about-us">
            <h2>Quem Somos</h2>
            <p>Somos um grupo de estudantes desenvolvendo um sistema inovador para academias. Nosso objetivo é
                simplificar a gestão para os proprietários de academias e melhorar a experiência dos usuários. O
                sistema oferece soluções integradas para agendamento, controle de pagamentos, gestão de membros e
                acompanhamento de treinos, visando otimizar a administração dos estabelecimentos e proporcionar uma
                experiência mais eficiente e personalizada para os clientes.</p>
        </section>

        <section class="mission-values">
            <h2>Missão e Valores</h2>
            <p>Fornecer soluções inovadoras e eficazes que ajudem nossos clientes a alcançar seus objetivos e a
                prosperar no mercado.</p>
            <h3>Valores</h3>
            <ul>
                <li>Integridade</li>
                <li>Inovação</li>
                <li>Compromisso com a qualidade</li>
                <li>Respeito pelos clientes e colaboradores</li>
            </ul>
        </section>

        <div class="px-5" align="center">
            <h2>Nossa Equipe</h2>
            <section class="team mt-4">

                <div class="team-member">
                    <img src="../images/eu.jpg" alt="Membro da equipe 1">
                    <h3>João</h3>
                    <p>Desenvolvedor Web</p>
                </div>
                <div class="team-member">
                    <img src="../images/ma.jpeg" alt="Membro da equipe 2">
                    <h3>Matheus</h3>
                    <p>Desenvolvedor Desktop</p>
                </div>
                <div class="team-member">
                    <img src="../images/drey.jpeg" alt="Membro da equipe 3">
                    <h3>Andrey</h3>
                    <p>Gerente de Projeto</p>
                </div>
                <div class="team-member">
                    <img src="../images/lore.jpeg" alt="Membro da equipe 1">
                    <h3>Lorenzo</h3>
                    <p>Desenvolvedor Mobile</p>
                </div>
                <div class="team-member">
                    <img src="../images/biel.jpeg" alt="Membro da equipe 1">
                    <h3>Gabriel</h3>
                    <p>Desenvolvedor Web</p>
                </div>
            </section>
        </div>
    </main>
    <?php require "../parts/footer.php"; ?>
</body>

</html>