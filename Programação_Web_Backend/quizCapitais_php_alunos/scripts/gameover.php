<?php

//Obtém o total de questões, respostas corretas e respostas erradas armazenadas na sessão do jogo.
$total_questions = $_SESSION['game']['total_questions']; // Número total de questões definidas no jogo.
$correct_answers = $_SESSION['game']['correct_answers']; // Número de respostas corretas fornecidas pelo jogador.
$incorrect_answers = $_SESSION['game']['incorrect_answers']; // Número de repostas erradas fornecidas pelo jogador
?>

<!-- Início do código HTML para exibir os resultados finais do jogo -->
<div class="result-container">
    <!-- Título principal do jogo (pode ser o mesmo de antes, como "Quiz das Capitias") -->
    <h1>Quiz das Capitais</h1>
    <hr> <!-- Linha horizontal para separar o título do restante dos resultados -->

    <!-- Exibe o número total de questões jogadas com destaque para o valor -->
    <h3>Total de questões: <strong class="result-value"><?= $total_questions ?></strong></h3>
    <!-- Exibe o número de respotas corretas fornecidas pelo jogador, com destaque -->
    <h3>Respostas corretas: <strong class="result-value"><?= $correct_answers ?></strong></h3>
    <!-- Exibe o número de respotas erradas fornecidas pelo jogador, com destaque -->
    <h3>Respotas erradas: <strong class="result-value"><?= $incorrect_answers ?></strong></h3>

    <!-- Botão para o usuário começar um novo jogo, redirecionando para a página inicial -->
    <div>
        <a href="index.php?route=start" class="btn btn-primary p-3 w-50">Jogar novamente</a>
    </div>
</div>


