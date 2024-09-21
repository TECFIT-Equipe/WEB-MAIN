<?php require "parts/nav.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;700&family=Rubik:wght@400;500;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body id="top">
    <div class="preloader" data-preloader>
        <div class="circle"></div>
    </div>

    <main>
        <article>
            <section class="section hero" aria-label="home">
                <div class="container">
                    <div class="hero-content">
                        <p class="hero-subtitle has-before" data-reveal="left">Seja Bem Vindo Ao</p>
                        <h1 class="headline-lg hero-title" data-reveal="left">
                            Seu Novo Sistema <br>
                            De Academias
                        </h1>
                    </div>
                    <figure class="hero-banner" data-reveal="right">
                        <img src="images/hero-banner.png"
                            width="590" height="517" loading="eager" alt="hero banner" class="w-100">
                    </figure>
                </div>
            </section>

            <section class="service" aria-label="service">
                <div class="container">
                    <ul class="service-list">
                        <li>
                            <div class="service-card" data-reveal="bottom">
                                <div class="card-icon">
                                    <img src="images/app.png" width="71" height="71" loading="lazy" alt="icon">
                                </div>
                                <h3 class="headline-sm card-title">
                                    <a href="servicos/servicos.php">Aplicativo para alunos e instrutores</a>
                                </h3>
                                <button class="btn-circle" aria-label="Saiba Mais"
                                    onclick="window.location.href='servicos/servicos.php';">
                                    <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                                </button>
                            </div>
                        </li>
                        <li>
                            <div class="service-card" data-reveal="bottom">
                                <div class="card-icon">
                                    <img src="images/people.png" width="71" height="71" loading="lazy" alt="icon">
                                </div>
                                <h3 class="headline-sm card-title">
                                    <a href="servicos/servicos.php">Controle de matrículas e gestão de alunos.</a>
                                </h3>
                                <button class="btn-circle" aria-label="Saiba Mais"
                                    onclick="window.location.href='servicos/servicos.php';">
                                    <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                                </button>
                            </div>
                        </li>

                        <li>
                            <div class="service-card" data-reveal="bottom">
                                <div class="card-icon">
                                    <img src="images/mensalidade.png" width="71" height="71" loading="lazy" alt="icon">
                                </div>
                                <h3 class="headline-sm card-title">
                                    <a href="servicos/servicos.php">Gestão de planos e mensalidades.</a>
                                </h3>
                                <button class="btn-circle" aria-label="Saiba Mais"
                                    onclick="window.location.href='servicos/servicos.php';">
                                    <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                                </button>
                            </div>
                        </li>
                        <li>
                            <div class="service-card" data-reveal="bottom">
                                <div class="card-icon">
                                    <img src="images/agendamento.png" width="71" height="71" loading="lazy" alt="icon">
                                </div>
                                <h3 class="headline-sm card-title">
                                    <a href="servicos/servicos.php">Gerenciamento de horários e agendamentos</a>
                                </h3>
                                <button class="btn-circle" aria-label="Saiba Mais"
                                    onclick="window.location.href='servicos/servicos.php';">
                                    <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                                </button>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>

            <section class="section about" aria-labelledby="about-label">
                <div class="container">
                    <div class="about-content">
                        <h2 class="headline-md" data-reveal="left">Transforme a gestão da sua academia com facilidade!
                        </h2>
                        <p class="section-text" data-reveal="left">
                            Aproveite a oportunidade de testar nosso sistema de gestão de academias por<a
                                href="servicos/servicos.php" style="color:#36ace2;">7 dias
                                totalmente grátis.</a>
                        </p>
                        <h3 class="headline-md" data-reveal="left" style="font-size:3.8rem;">O que você ganha durante o
                            teste grátis:
                        </h3>
                        <div class="wrapper">
                            <ul class="about-list">
                                <li class="about-item" data-reveal="left">
                                    <ion-icon name="checkmark-circle-outline"></ion-icon>
                                    <span class="span">Acesso completo a todas as funcionalidades do sistema, incluindo
                                        gestão de alunos, controle de planos e agendamentos.</span>
                                </li>
                                <li class="about-item" data-reveal="left">
                                    <ion-icon name="checkmark-circle-outline"></ion-icon>
                                    <span class="span">Suporte dedicado para auxiliar você a configurar tudo rapidamente
                                        e tirar o máximo proveito da plataforma.
                                    </span>
                                </li>
                                <li class="about-item" data-reveal="left">
                                    <ion-icon name="checkmark-circle-outline"></ion-icon>
                                    <span class="span">Sem compromisso – não pedimos cartão de crédito! Apenas
                                        registre-se e comece a usar.
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <p class="tab-text" data-reveal="left">
                            Descubra por si mesmo como nosso sistema pode revolucionar a maneira como você gerencia sua
                            academia. Clique no botão abaixo e comece agora!
                        </p>
                        <button type="button" class="btn has-before title-md" data-reveal="left"
                            onclick="window.location.href='servicos/servicos.php';">
                            Começar Teste Grátis por 7 Dias
                        </button>
                    </div>
                    <figure class="about-banner" data-reveal="right">
                        <img src="images/about-banner.png"
                            width="554" height="700" loading="lazy" alt="about banner" class="w-100">
                    </figure>
                </div>
            </section>

            <!--    <section class="section listing" aria-labelledby="listing-label">
                <div class="container">
                    <ul class="grid-list">
                        <li>
                            <p class="section-subtitle title-lg" id="listing-label" data-reveal="left">Doctors Listig
                            </p>
                            <h2 class="headline-md" data-reveal="left">Browse by specialist</h2>
                        </li>
                        <li>
                            <div class="listing-card" data-reveal="bottom">
                                <div class="card-icon">
                                    <img src="https://raw.githubusercontent.com/farazc60/Project-Images/main/medical/assets/icon-1.png"
                                        width="71" height="71" loading="lazy" alt="icon">
                                </div>
                                <div>
                                    <h3 class="headline-sm card-title">Psychiatry</h3>
                                    <p class="card-text">Porta velit</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="listing-card" data-reveal="bottom">
                                <div class="card-icon">
                                    <img src="https://raw.githubusercontent.com/farazc60/Project-Images/main/medical/assets/icon-2.png"
                                        width="71" height="71" loading="lazy" alt="icon">
                                </div>
                                <div>
                                    <h3 class="headline-sm card-title">Gynecology</h3>
                                    <p class="card-text">Mattis augue</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="listing-card" data-reveal="bottom">
                                <div class="card-icon">
                                    <img src="https://raw.githubusercontent.com/farazc60/Project-Images/main/medical/assets/icon-4.png"
                                        width="71" height="71" loading="lazy" alt="icon">
                                </div>
                                <div>
                                    <h3 class="headline-sm card-title">Pulmonology</h3>
                                    <p class="card-text">Mauris laoreet</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="listing-card" data-reveal="bottom">
                                <div class="card-icon">
                                    <img src="https://raw.githubusercontent.com/farazc60/Project-Images/main/medical/assets/icon-5.png"
                                        width="71" height="71" loading="lazy" alt="icon">
                                </div>
                                <div>
                                    <h3 class="headline-sm card-title">Orthopedics</h3>
                                    <p class="card-text">Convallis vulputate</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="listing-card" data-reveal="bottom">
                                <div class="card-icon">
                                    <img src="https://raw.githubusercontent.com/farazc60/Project-Images/main/medical/assets/icon-6.png"
                                        width="71" height="71" loading="lazy" alt="icon">
                                </div>
                                <div>
                                    <h3 class="headline-sm card-title">Pediatrics</h3>
                                    <p class="card-text">Posuere maecenas</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="listing-card" data-reveal="bottom">
                                <div class="card-icon">
                                    <img src="https://raw.githubusercontent.com/farazc60/Project-Images/main/medical/assets/icon-7.png"
                                        width="71" height="71" loading="lazy" alt="icon">
                                </div>
                                <div>
                                    <h3 class="headline-sm card-title">Osteology</h3>
                                    <p class="card-text">Nisi nullam</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section> -->

            <section class="section blog" aria-labelledby="blog-label" style="padding-top: 100px;">
                <div class="container">
                    <p class="section-subtitle title-lg text-center" id="blog-label" data-reveal="bottom">
                        Notícias & Artigos
                    </p>
                    <h2 class="section-title headline-md text-center" data-reveal="bottom">Últimos Artigos
                        <br>& Notícias
                    </h2>
                    <ul class="grid-list">
                        <li>
                            <div class="blog-card has-before has-after" data-reveal="bottom">
                                <div class="meta-wrapper">
                                    <div class="card-meta">
                                        <ion-icon name="person-outline"></ion-icon>
                                        <span class="span">TecFit</span>
                                    </div>
                                    <div class="card-meta">
                                        <ion-icon name="folder-outline"></ion-icon>
                                        <span class="span">Artigos</span>
                                    </div>
                                </div>
                                <h3 class="headline-sm card-title">Análise de Dados: Como Utilizar Métricas para
                                    Melhorar o Desempenho da Academia</h3>
                                <time class="title-sm date" datetime="2022-07-05">5 De Julho, 2024</time>
                                <p class="card-text">
                                    A análise de dados se tornou uma ferramenta crucial para a gestão de academias,
                                    permitindo que proprietários e gestores tomem decisões informadas...
                                </p>
                                <a href="#" class="btn-text title-lg">Leia Mais</a>
                            </div>
                        </li>
                        <li>
                            <div class="blog-card has-before has-after" data-reveal="bottom">
                                <div class="meta-wrapper">
                                    <div class="card-meta">
                                        <ion-icon name="person-outline"></ion-icon>
                                        <span class="span">TecFit</span>
                                    </div>
                                    <div class="card-meta">
                                        <ion-icon name="folder-outline"></ion-icon>
                                        <span class="span">Notícias</span>
                                    </div>
                                </div>
                                <h3 class="headline-sm card-title">Melhoria na Experiência do Cliente: Estratégias
                                    Inovadoras para Aumentar a Satisfação nas Academias</h3>
                                <time class="title-sm date" datetime="2024-09-21">21 de Setembro, 2024</time>
                                <p class="card-text">
                                    Nos últimos anos, o setor de academias tem se tornado cada vez mais competitivo, o
                                    que torna fundamental para os gestores investirem em estratégias que melhorem a
                                    experiência do cliente...
                                </p>
                                <a href="#" class="btn-text title-lg">Leia Mais</a>
                            </div>
                        </li>
                        <li>
                            <div class="blog-card has-before has-after" data-reveal="bottom">
                                <div class="meta-wrapper">
                                    <div class="card-meta">
                                        <ion-icon name="person-outline"></ion-icon>
                                        <span class="span">TecFit</span>
                                    </div>
                                    <div class="card-meta">
                                        <ion-icon name="folder-outline"></ion-icon>
                                        <span class="span">Artigos</span>
                                    </div>
                                </div>
                                <h3 class="headline-sm card-title">O Impacto das Redes Sociais na Gestão de Academias
                                </h3>
                                <time class="title-sm date" datetime="2024-10-08">8 de Outubro, 2024</time>
                                <p class="card-text">
                                    Nos últimos anos, as redes sociais se tornaram uma ferramenta indispensável para a
                                    gestão de academias. Com a ascensão de plataformas como Instagram, Facebook e
                                    TikTok, a forma...
                                </p>
                                <a href="#" class="btn-text title-lg">Leia Mais</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </article>
    </main>
    <?php require "parts/footer.php" ?>
    <script src="js/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>