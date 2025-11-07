<?php

use PhpMyAdmin\Sql;

include "connection.php";

$sql = "CREATE TABLE IF NOT EXISTS pokemon(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255),
    tipo ENUM('Normal', 'Fogo', 'Água', 'Grama',  'Voador', 'Lutador', 'Veneno', 'Elétrico', 'Terra', 'Pedra', 'Psíquico', 'Gelo', 'Inseto', 'Fantasma', 'Ferro', 'Dragão', 'Sombrio', 'Fada'),
    cor VARCHAR(25),
    estagio_ev ENUM('1', '2' , '3')
)";

$conn->query($sql);

if ($_SERVER ["REQUEST_METHOD"] == "POST"){

    // Rece e os valores enviados do formulário post no campo nome e idade
    $nome = $_POST['nome'];
    $tipo = $_POST['tipo'];
    $cor = $_POST['cor'];
    $estagio_ev = $_POST['estagio_ev'];

    // Montar uma consulta sql para inserir os valores no banco
    $sql = "INSERT INTO pokemon (nome, tipo, cor, estagio_ev) VALUES ('$nome', '$tipo', '$cor', '$estagio_ev')";
    // Executar a consulta no banco
    $conn->query($sql);
    echo "Dados inseridos com sucesso!<br>";
}

$sql = "SELECT * FROM pokemon";
$result = $conn->query($sql)

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Rrgistre seus Pokemon</h1>
        <form action="" method="post">
            <div class="nome">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" required>
            </div>
            <div class="tipo">
                <label for="tipo">Tipo:</label>
                <select name="tipo" id="tipo" required>
                    <option value="Normal">Normal</option>
                    <option value="Fogo">Fogo</option>
                    <option value="Água">Água</option>
                    <option value="Grama">Grama</option>
                    <option value="Voador">Voador</option>
                    <option value="Lutador">Lutador</option>
                    <option value="Veneno">Veneno</option>
                    <option value="Elétrico">Elétrico</option>
                    <option value="Terra">Terra</option>
                    <option value="Pedra">Pedra</option>
                    <option value="Psíquico">Psíquico</option>
                    <option value="Gelo">Gelo</option>
                    <option value="Inseto">Inseto</option>
                    <option value="Fantasma">Fantasma</option>
                    <option value="Ferro">Ferro</option>
                    <option value="Dragão">Dragão</option>
                    <option value="Sombrio">Sombrio</option>
                    <option value="Fada">Fada</option>
                </select>
            </div>
            <div class="cor">
                <label for="">Cor:</label>
                <input type="text" name="cor" id="cor" required>
            </div>
            <div class="estagio">
                <label for="estagio_ev">Estágio Evolutivo:</label>
                <select name="estagio_ev" id="estagio_ev" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
            <input type="submit" value="Enviar">
        </form>
        <table style="text-align: center;">
            <thead>
                <th>ID</th>
                <th>Nome</th>
                <th>Tipo</th>
                <th>Cor</th>
                <th>Estágio Evolutivo</th>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= $row["id"] ?></td>
                        <td><?= $row["nome"] ?></td>
                        <td><?= $row["tipo"] ?></td>
                        <td><?= $row["cor"] ?></td>
                        <td><?= $row["estagio_ev"] ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </main>
</body>
</html>