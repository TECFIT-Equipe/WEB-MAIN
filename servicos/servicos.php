<?php require "../parts/nav.php" ?>

<style>

.container-2 {
    display: flex;
    justify-content: center;
    gap: 20px;
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
  background-color: #3498db; /* Azul */
  border: none;
  color: white;
  padding: 15px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  border-radius: 8px; /* Bordas arredondadas */
  transition: background-color 0.3s, transform 0.3s;
}

.button:hover {
  background-color: #2980b9; /* Azul mais escuro */
  transform: scale(1.05); /* Aumenta um pouco o botão */
}


</style>

<header>
        <h1>Nossos Planos</h1>
    </header>

    <br>

    <div class="container-2">
        <div class="plan">
            <h1>Plano Mensal</h1>
            <p>Descrição do plano Mensal.</p>
            <li>Acesso Pelo Celular</li>
            <li>Gerenciamento Administrativo</li>
            <li>Controle de Matrículas</li>
            <li>Agendamento de Aulas</li>
            <li>Relatorios Financeiro</li>
            <li>Check-in Automatico</li>
            <p>Preço: 1X de R$500/mês</p>
            <a href="#" class="button">Clique Aqui</a>
        </div>
        <div class="plan">
            <h1>Plano Trimensal</h1>
            <p>Descrição do plano Trimensal.</p>
            <li>Acesso Pelo Celular</li>
            <li>Gerenciamento Administrativo</li>
            <li>Controle de Matrículas</li>
            <li>Agendamento de Aulas</li>
            <li>Relatorios Financeiro</li>
            <li>Check-in Automatico</li>
            <p>Preço: 3X de R$490/mês</p>
            <a href="#" class="button">Clique Aqui</a>
        </div>
        <div class="plan">
            <h1>Plano Anual</h1>
            <p>Descrição do plano Anual.</p>
            <li>Acesso Pelo Celular</li>
            <li>Gerenciamento Administrativo</li>
            <li>Controle de Matrículas</li>
            <li>Agendamento de Aulas</li>
            <li>Relatorios Financeiro</li>
            <li>Check-in Automatico</li>
            <p>Preço: 12X de R$450/mês</p>
            <a href="#" class="button">Clique Aqui</a>
        </div>
    </div>

