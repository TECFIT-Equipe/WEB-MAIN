<?php require "../parts/nav.php" ?>

<style>

/* Reset básico para evitar diferenças entre navegadores */
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
    background: #333;
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
}

h2 {
    color: #333;
    margin-bottom: 10px;
}

.about-us, .mission-values, .team {
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

footer {
    text-align: center;
    padding: 10px;
    background: #333;
    color: #fff;
    position: absolute;
    bottom: 0;
    width: 100%;
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
<body>
    <header>
        <h1>Sobre Nós</h1>
    </header>

    <main>
        <section class="about-us">
            <h2>Quem Somos</h2>
            <p>Somos uma empresa dedicada a fornecer soluções inovadoras para nossos clientes. Com anos de experiência no mercado, nossa missão é oferecer serviços de alta qualidade que atendam às necessidades de nossos clientes e superem suas expectativas.</p>
            <p>Nossa equipe é composta por profissionais altamente qualificados e apaixonados pelo que fazem. Trabalhamos juntos para criar um ambiente de trabalho colaborativo e estimulante, onde cada membro da equipe pode crescer e contribuir para o sucesso da empresa.</p>
        </section>

        <section class="mission-values">
            <h2>Missão e Valores</h2>
            <h3>Missão</h3>
            <p>Fornecer soluções inovadoras e eficazes que ajudem nossos clientes a alcançar seus objetivos e a prosperar no mercado.</p>
            <h3>Valores</h3>
            <ul>
                <li>Integridade</li>
                <li>Inovação</li>
                <li>Compromisso com a qualidade</li>
                <li>Respeito pelos clientes e colaboradores</li>
            </ul>
        </section>

        <section class="team">
            <h2>Nossa Equipe</h2>
            <div class="team-member">
                <img src="../images/eu.jpg" alt="Membro da equipe 1">
                <h3>João Gentili</h3>
                <p>Desenvolvidor Web</p>
            </div>
            <div class="team-member">
                <img src="../images/eu.jpg" alt="Membro da equipe 2">
                <h3>Mathues Sinatora</h3>
                <p>Desenvolvidor Desktop</p>
            </div>
            <div class="team-member">
                <img src="../images/eu.jpg" alt="Membro da equipe 3">
                <h3>Andrey Dalosto</h3>
                <p>Desenvolvedor Mobile</p>
            </div>
            <div class="team-member">
                <img src="../images/eu.jpg" alt="Membro da equipe 1">
                <h3>João Gentili</h3>
                <p>Desenvolvidor Web</p>
            </div>
            <div class="team-member">
                <img src="../images/eu.jpg" alt="Membro da equipe 1">
                <h3>Gabriel Fonseca</h3>
                <p>Desenvolvidor Web</p>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Sua Empresa. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
