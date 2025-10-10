<?php
    $idade = 18;
    echo"Verificação de menor que:<br>";
    if($idade < 18){
        echo"Menor que dezoito anos<br><br>";
    }
    else{
        echo"Tem dezoito anos ou mais<br><br>";
    }

    $idade = 18;
    echo"Verificação de maior que:<br>";
    if($idade > 18){
        echo"Maior que dezoito anos<br><br>";
    }
    else{
        echo"Tem dezoito anos ou menos<br><br>";
    }

    $idade = 18;
    echo"Verificação de igual á:<br>";
    if($idade == 18){
        echo"Tem dezoito anos<br><br>";
    }
    else{
        "Tem mais ou menos de dezoito anos<br><br>";
    }

    $idade = 18;
    echo"Verificação de idêntico á:<br>";
    if($idade === 18){
        echo"Tem dezoito anos e o valor é INT<br><br>";
    }
    else{
        echo"Tem mais ou menos de dezoito anos, ou o valor não é inteiro<br><br>";
    }

    $idade = 18;
    echo"Verificação de diferente de:<br>";
    if($idade != 18){
        echo"É diferente de dezoito<br><br>";
    }
    else{
        echo"Tem dezoito anos<br><br>";
    }

    $idade = 18;
    echo"Verificação de maior ou igual á:<br>";
    if($idade >= 18){
        echo"Tem dezoito  ou mais<br><br>";
    }
    else{
        echo"Tem menos de dezoito anos<br><br>";
    }

    $idade = 18;
    echo"Verificação de menor ou igual á:<br>";
    if($idade <= 18){
        echo"Tem dezoito anos ou menos<br><br>";
    }
    else{
        echo"Tem mais de dezoito anos<br><br>";
    }
 
    $idade = 18;
    $idade2 = 18;
    echo "Verificação de duas condições com E:<br>";
    if($idade == 18 && $idade2 == 18){
        echo"As duas idades são dezoito<br><br>";
    }
    else{
        echo"As duas idades não são dezoito<br><br>";
    }
 
    $idade = 18;
    echo"Verificação de duas condições com OU:<br>";
    if($idade == 18 || $idade == 20){
        echo"Uma das duas idades é dezoito<br><br>";
    }
    else{
        echo"Nenhuma das duas idades é dezoito";
    }
?>