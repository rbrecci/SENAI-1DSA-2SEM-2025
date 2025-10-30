<?php

// Verifica se a requisição é do tipo POST. Isso acontece quando o formulário é enviado.
if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    // Obtém o número total de questões, convertendo o valor para inteiro.
    // Se não for fornecido, define o valor padrão como 10.
    $total_questions = intval($_POST['text_total_questions']) ?? 10;

    // Chama a função 'prepare_game' para preparar os dados do jogo com o número de questões definido.
    prepare_game($total_questions);

    // Redireciona para a página do jogo (route-game), para que o jogador possa começar a jogar.
    // Isso é feito através de um cabeçalho HTTP que muda a URL e recarrega a página.
    header('Location: index.php?route=game');
    exit; // A execução é interrompida aqui para evitar que o código abaixo seja executado.
}

// Função para preparar os dados do jogo com base no número total de questões fornecido.
function prepare_game($total_questions){
    // Acessa a variável global $capitais, que contém os dados das capitais.
    global $capitals;

    // Inicializa um array vazio para armazenar os IDs das capitais selecionadas aleatoriamente.
    $ids = [];
    // Continua até que tenhamos o número desejado de questões.
    while (count($ids) < $total_questions){
        // Gera um ID aleatório dentro do intervalo de índices do array $capitals.
        $id = rand(0, count($capitals) - 1);
        // Verifica se o ID já foi selecionado. Se não, adiciona ao array $ids.
        if(!in_array($id, $ids)){
            $ids[] = $id;
        }
    }

    // Inicializa o array $questions para armazenar as questões do jogo.
    $questions = [];
    // Para cada ID selecionado, cria uma questão.
    foreach($ids as $id){
        // Inicializa um array para armazenar as respostas possíveis.
        $answers = [];
        // A primeira resposta é sempre o ID correto (capital correspondente ao país).
        $answers[] = $id;
        // Preenche as outras respostas com IDs aleatórios que não sejam iguais ao correto.
        while(count($answers) < 3){
            $tpm = rand(0, count($capitals) - 1);
            // Verifica se a resposta gerada já foi selecionada. Se não, adiciona à lista de respostas.
            if(!in_array($tpm, $answers)){
                $answers[] = $tpm;
            }
        }

        // Embaralha as respostas para que a correta não fique sempre na mesma posição.
        shuffle($answers);

        // Adiciona a questão ao array $questions.
        // Cada questão contém o nome do país, o ID da resposta correta e as 3 alernativas.
        $questions[] = [
            'question' => $capitals[$id][0], // O nome do país.
            'correct_answer' => $id, // O ID da resposta correta (capital).
            'answers' => $answers //As 3 respostas possíveis (uma correta, duas erradas).
        ];
    }

    // Armazena as questões geradas na sessão para que possam ser acessadas em outras páginas.
    $_SESSION['questions'] = $questions;

    // Inicializa os dados do jogo na sessão, incluindo o número total de questões,
    // O número da questão atual e as contagens de respostas corretas e erradas.
    $_SESSION['game'] = [
        'total_questions' => $total_questions, // Número total de questões definidas pelo usuário.
        'current_question' => 0, // Começa com a primeira questão.
        'correct_answers' => 0, // Inicializa o número de respostas corretas.
        'incorrect_answers' => 0, // Inicializa o número de respostas erradas.
    ];
}

?>

<!-- Início do código HTML para exibir o formulário na página de início -->
<div class="container">
    <div class="row">
        <!-- Título principal do jogo -->
        <h1>Quiz das Capitais</h1>
        <hr>

        <!-- Formulário para o usuário definir o número de questões e iniciar o jogo -->
        <form action="index.php?route=start" method="post">
            <!-- Pergunta sobre o número de questões, com um campo input de tipo number -->
            <h3><label for="text_total_questions" class="fomr-label">Número de questões</label>
            <!-- O valor inicial é 10, o mínimo 1 e o máximo é 20. -->
            <input type="number" name="text_total_questions" id="text_total_questions" class="form_control" value="10" min="1" max="20">
            <!-- Botão para submeter o formulário e iniciar o jogo -->
            <div>
                <button class="btn" type="submit">Iniciar</button>
            </div>
            </h3>
        </form>
    </div>
</div>