<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frete</title>
</head>
<body>
    <h1>Cálculo de Frete</h1>
    <form method="POST">
        <label for="estado">Selecione seu estado: </label>
        <select name="estado" id="estado">
            <option value="1">São Paulo</option>
            <option value="2">Espirito Santo</option>
            <option value="3">Minas Gerais</option>
            <option value="4">São Caetano do Sul</option>
            <option value="5">Santa Catarina</option>
            <option value="6">Mato Grosso do Sul</option>
            <option value="7">Pernambuco</option>
            <option value="8">Bahia</option>
            <option value="9">Tocantins</option>
            <option value="10">Amapá</option>
        </select>
        <button type="submit">Calcular Frete</button>
    </form>
    <?php
        if(isset($_POST['estado'])){
            $estado = $_POST['estado'];
            switch ($estado){
                case 1:
                    $estado = 'São Paulo';
                    $frete = 20;
                break;
                
                case 2:
                    $estado = 'Espírito Santo';
                    $frete = 35;
                break;

                case 3:
                    $estado = 'Minas Gerais';
                    $frete = 40;
                break;

                case 4:
                    $estado = 'São Caetano do Sul';
                    $frete = 25;
                break;

                case 5:
                    $estado = 'Santa Catarina';
                    $frete = 5;
                break;

                case 6:
                    $estado = 'Mato Grosso do Sul';
                    $frete = 50;
                break;

                case 7:
                    $estado = 'Pernambuco';
                    $frete = 75;
                break;

                case 8:
                    $estado = 'Bahia';
                    $frete = 90;
                break;

                case 9:
                    $estado = 'Tocantins';
                    $frete = 105;
                break;

                case 10:
                    $estado = 'Amapá';
                    $frete = 170;
                break;
            }
            echo "O valor do frete para $estado é de: R$$frete";
        }
    ?>
</body>
</html>