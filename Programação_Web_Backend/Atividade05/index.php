<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade7</title>
</head>
<body>
    <form method="post">
        <h1>Verifique seu desconto</h1>
        <label for="acesso">Selecione seu tipo de cliente:</label>
        <select name="acesso" id="acesso">
            <option value="1">VIP</option>
            <option value="2">Regular</option>
            <option value="3">Outro</option>
        </select>
        <button type="submit">Verificar desconto</button>
    </form>
    <?php
        if (isset($_POST['acesso'])){
            $acesso = $_POST['acesso'];

            switch ($acesso){
                case 1:
                    $desconto = 20;
                break;

                case 2:
                    $desconto = 10;
                break;

                case 3:
                    $desconto = 0;
                break;
            }
            if ($desconto == 0){
                echo 'Sem desconto.';
            }
            else{
                echo "Desconto de: $desconto%!";
            }
        }
    ?>
    <style>
        *{
            margin: 0;
            padding: 0;
            font-size: 16px;
            box-sizing: border-box;
        }
        body{
            height: 100vh;
            background-color: beige;
            background: linear-gradient(190deg, #0000ff, #00bbff, #b3e3ffff);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            font-family: Arial, Helvetica, sans-serif;
        }
        h1{
            font-size: 2rem;
        }
        label{
            font-size: 1.5rem;
        }
        form{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 50px;
            margin-bottom: 20px;
        }
    </style>
</body>
</html>