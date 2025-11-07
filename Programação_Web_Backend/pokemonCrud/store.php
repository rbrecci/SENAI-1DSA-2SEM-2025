<?php

include "connection.php"; // Puxa o arquivo de conexão

if($_SERVER["REQUEST_METHOD"] == "POST"){ // Verifica se o formulário foi enviado

    $nome = $_POST['nome'];
    $tipo = $_POST['tipo'];
    $cor = $_POST['cor'];
    $estagio_ev = $_POST['estagio_ev'];

    $sql = "INSERT INTO pokemon (nome, tipo, cor, estagio_ev) VALUES ('$nome', '$tipo', '$cor', '$estagio_ev')";

    // Executa a consulta e verifica se foi bem-sucedida
    if($conn->query($sql) === TRUE){
        header("location: index.php"); //Redireciona para a página principal
    } else{
        echo "Erro: " . $conn->error; // Mostra o erro, se houver
    }
}