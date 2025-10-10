<?php
    echo '<h1>Utilizando variável de variável<br><br></h1>';
    $nome = 'Raul';
    echo 'Olá Mago ' . $nome . '<br> <br>';

    $Raul = 'O Mago';
    echo 'Olá Raul, ' . $$nome;
?>

<style>
    body{
        text-align: center;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 20px;
        background: linear-gradient(#fff,#002aff54, #002aff54);
    }
</style>