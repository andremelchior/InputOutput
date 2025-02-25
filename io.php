<?php
    $num1 = filter_input(INPUT_POST, "email");
    echo "<h1>Seu email é: ".$num1."</h1><br>"; //alternativa para concatenação invés de usar por interpolação
?>