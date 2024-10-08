<?php require "../parts/nav.php" ?>

<style>
button {
    background: transparent;
    position: relative;
    padding: 5px 15px;
    display: flex;
    align-items: center;
    font-size: 17px;
    font-weight: 600;
    text-decoration: none;
    cursor: pointer;
    border: 1px solid rgb(255, 0, 0);
    border-radius: 25px;
    outline: none;
    overflow: hidden;
    color: rgb(255, 0, 0);
    transition: color 0.3s 0.1s ease-out;
    text-align: center;
}

button span {
    margin: 10px;
}

button::before {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    margin: auto;
    content: '';
    border-radius: 50%;
    display: block;
    width: 20em;
    height: 20em;
    left: -5em;
    text-align: center;
    transition: box-shadow 0.5s ease-out;
    z-index: -1;
}

button:hover {
    color: #fff;
    border: 1px solid rgb(255, 0, 0);
}

button:hover::before {
    box-shadow: inset 0 0 0 10em rgb(255, 0, 0);
}

/* Estilos globais */
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
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.contact-info {
    margin-bottom: 20px;
}

.horarios-contato {
    display: flex;
    justify-content: space-between;
}

.horarios {
    flex-basis: 40%;
}

.contato {
    flex-basis: 40%;
}

.contact-info ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.contact-info li {
    margin-bottom: 10px;
}

.contact-info strong {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

.contact-info p {
    margin: 0;
}

.horarios ul,
.contato ul {
    padding-left: 20px;
}

.email-telefone strong {
    display: block;
    margin-bottom: 5px;
}

.social-media {
    text-align: center;
}

.social-media button {
    display: inline-block;
    padding: 10px 20px;
    background: #333;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

.social-media button:hover {
    background: #555;
}

.social-media svg {
    width: 16px;
    height: 16px;
    margin-right: 10px;
}

.social-media span {
    margin-left: 10px;
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

<body>

    <!DOCTYPE html>
    <html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Página de Contato</title>
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>
        <header>
            <h1>Entre em Contato Conosco</h1>
        </header>
        <main>
            <section class="contact-info">
                <h2>Informações de Contato</h2>
                <div class="horarios-contato">
                    <div class="horarios">
                        <h3>Horários de Atendimento</h3>
                        <ul>
                            <li>
                                <strong>Segunda a sexta:</strong>
                                <p>Atendimento das 8h às 18h com plantão noturno das 18h às 22h.</p>
                            </li>
                            <li>
                                <strong>Sábado:</strong>
                                <p>Plantão disponível das 8h às 22h.</p>
                            </li>
                            <li>
                                <strong>Domingos e feriados:</strong>
                                <p>Plantão das 12h às 20h.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="contato">
                        <h3>Contato</h3>
                        <ul>
                            <li>
                                <strong>Email:</strong>
                                <p>tecfit3@gmail.com</p>
                            </li>
                            <li>
                                <strong>Telefone:</strong>
                                <p>+55 19 1234-5678</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <a target="_blank" href="https://www.instagram.com/tecfit._/">
                <button>
                    <svg viewBox="0 0 16 16" class="bi bi-instagram" fill="currentColor" height="16" width="16"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                        </path>
                    </svg>
                    <span>Instragram</span>
                </button>
            </a>


        </main>

    </body>

    </html>