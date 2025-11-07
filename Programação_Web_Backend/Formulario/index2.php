<?php

include "connection.php";

//1. Criar uma tabela "carros"
$sql = "CREATE TABLE IF NOT EXISTS carros(
    id INT AUTO_INCREMENT PRIMARY KEY,
    modelo VARCHAR(255),
    ano INT
)";

$conn->query($sql);

//2. Formulário para inserir modelo e ano
echo '
<form method="POST">
    Modelo: <input type="text" name ="modelo"> <br>
    Ano: <input type="number" name="ano"> <br>
    <input type="submit" value="Adicionar">
    <br>
';

// Recebe os dados via POST e Inserir dados
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $modelo = $_POST["modelo"];
    $ano = $_POST["ano"];

    if($modelo == "" || $ano == "" || $ano<=0){
        echo "Preencha os campos corretamente <br>";
    }else{
        $sqlInsert = "INSERT INTO carros (modelo, ano) VALUES ('$modelo', $ano)";
        if($conn->query($sqlInsert) === TRUE){
            echo "Carro registrado com sucesso! <br>";

            // 4. Mostrar o ultimo registro inserido
            $ultimo_id = $conn->insert_id;
            $sqlSelect = "SELECT * FROM carros WHERE id = $ultimo_id";
            $resultado = $conn->query($sqlSelect);
            $carro = $resultado ->fetch_assoc();
            echo 'id: ' . $carro['id'] . '<br>' . 'Modelo: ' . $carro['modelo'] . '<br>' . 'Ano: ' . $carro['ano'] . '<br>';
        }else{
            echo "Erro ao inserir" . $conn->error . "<br>";
        }
    }
}

// Listar todos os carros em tabela

echo "<h3> Carros cadastrados </h3>";
$sqlAll = "SELECT * FROM carros";
$result = $conn->query ($sqlAll);

if ($result->num_rows > 0){
    echo"
        <table border='1'>
        <tr>
            <th>ID</th>
            <th>Modelo</th>
            <th>Ano</th>
        </tr>
    ";

    while ($row = $result->fetch_assoc()){
        echo "
            <tr>
                <td>".$row["id"]."</td>
                <td>".$row["modelo"]."</td>
                <td>".$row["ano"]."</td>
            </tr>
        ";
    }
    echo "</table>";
}else{
    echo "Nenhum carro cadastrado.<br>";
}

// Mostrar carros ordenados pelo ano
echo "<h3> Carros Ordenados pelo ano</h3>";
$sqlOrder = "SELECT * FROM carros ORDER BY ano";
$resOrder = $conn -> query ($sqlOrder);

if ($resOrder->num_rows > 0){
    echo"
        <table border='1'>
        <tr>
            <th>ID</th>
            <th>Modelo</th>
            <th>Ano</th>
        </tr>
    ";

    while ($row = $resOrder->fetch_assoc()){
        echo "
            <tr>
                <td>".$row["id"]."</td>
                <td>".$row["modelo"]."</td>
                <td>".$row["ano"]."</td>
            </tr>
        ";
    }
    echo "</table>";
}


// Contar os carros cadastrados
$sqlCount = "SELECT COUNT(*) AS total FROM carros";
$resCount = $conn->query($sqlCount);
$linhaCount = $resCount -> fetch_assoc();

echo '<br> Total de carros ' . $linhaCount['total'] . '<br>';

// Fechar a conexão
$conn->close();