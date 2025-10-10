<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Linkin Park</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <img src="img/logo.png" alt="Logo">
        <nav>
            <ul>
                <li>Sobre</li>
                <li>Ingressos</li>
                <li>Contato</li>
            </ul>
        </nav>
    </header>
    <main>
        <form method="post">
            <h1>Formulario de Ingresso</h1>
            <input type="text" name="nome" id="nome" placeholder="Nome" require>
            <input type="number" name="idade" id="idade" placeholder="Idade" require>
            <input type="email" name="email" id="email" placeholder="Email" require>
            <select name="escolha" id="escolha">
                <option value="1">VIP</option>
                <option value="2">Regular</option>
                <option value="3">Básico</option>
            </select>
            <button type="submit">Enviar</button>
            <?php
                if(isset($_POST['nome'])){
                    $nome = $_POST['nome'];
                    $idade = $_POST['idade'];
                    $email = $_POST['email'];
                    $escolha = $_POST['escolha'];
                    switch ($escolha){
                            case 1:
                                $ingresso = 'VIP';
                                $valor = 100;
                            break;
                            case 2:
                                $ingresso = 'Regular';
                                $valor = 50;
                            break;
                            case 3:
                                $ingresso = 'Basico';
                                $valor = 20;
                            break;
                        }
                    if ($idade >=18){
                        echo "<p>Bem vindo, $nome!<br>Sua idade e valida <br> Seu ingresso $ingresso no valor de R$$valor foi enviado no email $email.</p>";
                    }
                    else{
                        echo "<p>Ola, $nome!<br>Infelizmente sua idade e inválida. <br> O aguardamos na proxima vez!</p>";
                    }
                }
            ?>
        </form>
    </main>

</body>
</html>