<?php

$servername = "localhost";
$username = "root";
$password = "Senai@118";
$dbname = "teste_conexao";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){ echo "Erro de conexão. <br> <br>"; }