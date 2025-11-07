<?php

include "connection.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM pokemon WHERE id=$id";

    if($conn->query($sql) === TRUE){
        header("location: index.php");
    } else{
        echo "Erro: " . $conn->error;
    }
}