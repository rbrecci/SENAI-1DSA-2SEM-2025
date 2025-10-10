<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <h1>Preencha o formulário</h1>
    <form method="POST">
        <input type="text" name="nome" placeholder="Nome" require>
        <input type="text" name="email" placeholder="Email" require>
        <input id="cpf" type="text" name="cpf" placeholder="CPF" require>
        <input type="number" name="idade" id="idade" placeholder="Idade">
        <input id="telefone" type="text" name="telefone" placeholder="Telefone" require>
        <div class="buttons">
            <button type="submit">Enviar</button>
            <button type="reset">Limpar</button>
        </div>
    </form>
    <?php 
        if (isset($_POST['nome'])){
            $nome = $_POST['nome'];
            echo"<p>Olá $nome</p>";
        }
        if (isset($_POST['email'])){
            $email = $_POST['email'];
            echo"<p>Seu email é $email</p>";
        }
        if (isset($_POST['cpf'])){
            $cpf = $_POST['cpf'];
            echo"<p>Seu cpf é $cpf</p>";
        }
        if (isset($_POST['idade'])){
            $idade = $_POST['idade'];
            if($idade>=18){
                echo"<p>Sua idade é $idade, você pode dirigir.</p>";
            }
            else{echo"<p>Sua idade é $idade, você não pode dirigir.</p>";
            }
        }
        if (isset($_POST['telefone'])){
            $telefone = $_POST['telefone'];
            echo"<p>Seu telefone é $telefone</p>";
        }
    ?>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: lightgrey;
        }
        form{
            height: 200px;
            width: 340px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
        }
        form input{
            border: none;
            padding: 1%;
            width: 100%;
            border-bottom: 1px solid black;
            background-color: lightgrey;
        }
        .buttons{
            width: 100%;
            display: flex;
            justify-content: center;
            gap: 18px;
        }
        #cpf, #telefone{
            width: 35%;
        }
        #idade{
            width: 15%;
            text-align: center;
        }
        form input:focus{outline: none;}
    </style>
</body>
</html>