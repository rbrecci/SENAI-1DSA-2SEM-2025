<?php

include "connection.php";

$sql = "CREATE TABLE IF NOT EXISTS pokemon(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255),
    tipo ENUM('Normal', 'Fogo', 'Água', 'Grama',  'Voador', 'Lutador', 'Veneno', 'Elétrico', 'Terra', 'Pedra', 'Psíquico', 'Gelo', 'Inseto', 'Fantasma', 'Ferro', 'Dragão', 'Sombrio', 'Fada'),
    cor VARCHAR(25),
    estagio_ev ENUM('1', '2' , '3')
)";

$sql = "SELECT * FROM pokemon";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Simples</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/International_Pok%C3%A9mon_logo.svg/2560px-International_Pok%C3%A9mon_logo.svg.png" alt="">
        <h1>Gerenciamento de Pokemon</h1>
        <nav>
            <ul>
                <li><a href="#registro">Registro</a></li>
                <li><a href="#listagem">Listagem</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="sec1">
            <form action="store.php" method="post" id="registro">
                <h2>Registre seu Pokemon</h2>
                <input type="text" name="nome" id="nome" placeholder="Nome" required>
                <select name="tipo" id="tipo" required>
                    <option value="" selected disabled>Tipo</option>
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
                <input type="text" name="cor" id="cor" placeholder="Cor" required>
                <select name="estagio_ev" id="estagio_ev" required>
                    <option value="" selected disabled>Estágio Evolutivo</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
                <input type="submit" value="Enviar">
            </form>
        </section>
        <section id="sec2">
            <h2>Lista de Pokemon</h2>
            <table id="listagem">
                <thead>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Tipo</th>
                    <th>Cor</th>
                    <th>Estágio Evolutivo</th>
                    <th>Ação</th>
                </thead>
                <tbody>
                    <?php while($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?= $row["id"] ?></td>
                            <td><?= $row["nome"] ?></td>
                            <td><?= $row["tipo"] ?></td>
                            <td><?= $row["cor"] ?></td>
                            <td><?= $row["estagio_ev"] ?></td>
                            <td>
                                <a href="update.php?id=<?= $row['id'] ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="delete.php?id=<?= $row['id'] ?>"><i class="fa-solid fa-trash" style="color: #f50000;"></i></a>
                            </td>
                        </tr>
                    <?php endwhile ?>
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>