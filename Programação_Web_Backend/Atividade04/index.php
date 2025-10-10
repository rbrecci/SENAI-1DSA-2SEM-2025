<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <h1>Selecione sua bebida</h1>
    <form method="POST">
        <label for="bebida">Escolha uma bebida:</label>
        <select name="bebida" id="bebida">
            <option value="Água">Água</option>
            <option value="Suco">Suco</option>
            <option value="Refrigerante">Refrigerante</option>
        </select>
        <button type="submit">Escolher</button>
    </form>
    <?php
        if (isset($_POST['bebida'])){
            $bebida = $_POST['bebida'];
            switch ($bebida){
                case "Água":
                    echo"Você escolheu: $bebida <br>";
                    echo"Preço: R$2,50";
                break;

                case "Suco":
                    echo"Você escolheu: $bebida <br>";
                    echo"Preço: R$3,50";
                break;

                case "Refrigerante":
                    echo"Você escolheu: $bebida <br>";
                    echo"Preço: R$4,00";
                break;
            }
        }
    ?>
</body>
</html>