<?php

include "connection.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM pokemon WHERE id=$id";

    $result = $conn->query($sql);
    $usuario = $result->fetch_assoc();
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST['nome'];
    $tipo = $_POST['tipo'];
    $cor = $_POST['cor'];
    $estagio_ev = $_POST['estagio_ev'];
    $sql = "UPDATE pokemon SET nome='$nome', tipo='$tipo', cor='$cor', estagio_ev='$estagio_ev' WHERE id=$id";

    if ($conn->query($sql) === TRUE){
        header("Location: index.php");
    } else{
        echo "Erro: " . $conn->error;
    }
}

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
    <header id="updheader">
        <h1>Gerenciamento de </h1><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/International_Pok%C3%A9mon_logo.svg/2560px-International_Pok%C3%A9mon_logo.svg.png" alt="">
    </header>
    <main>
        <section id="sec1upd">
            <form action="" method="post" id="updform">
                <div class="top">
                    <a href="index.php"><i class="fa-solid fa-x" id="X"></i></a>
                    <h2>Atualize seu Pokemon</h2>
                </div>
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
                <input type="submit" value="Atualizar">
            </form>
        </section>
    </main>
</body>
</html>