<?php

include "connection.php";

// Verifica se o formulario foi enviado via metodo POST
if ($_SERVER ["REQUEST_METHOD"] == "POST"){

    // Rece e os valores enviados do formulário post no campo nome e idade
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    // Montar uma consulta sql para inserir os valores no banco
    $sql = "INSERT INTO pessoas (nome,idade) VALUES ('$nome', $idade)";
    // Executar a consulta no banco
    $conn->query($sql);
    echo "Dados inseridos com sucesso!<br>";
}else{
    echo "Digite os dados corretamente.";
}

$sql = "SELECT * FROM pessoas";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Nome: <input type="text" name="nome"><br>
        Idade: <input type="number" name="idade"><br>

        <input type="submit" value="Enviar">
    </form>
    <table style="text-align: center;">
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>Idade</th>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row["id"] ?></td>
                    <td><?= $row["nome"] ?></td>
                    <td><?= $row["idade"] ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>