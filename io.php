<?php
    $_POST ['nome']; //variavel para entrada manual
    $email = filter_input(INPUT_POST, "email"); //método para entrada manual

    echo "<h1>Seu nome é: ".$_POST ['nome']."</h1>";
    echo "<h2>E seu email é: ".$email."</h2><br>"; //alternativa para concatenação invés de usar por interpolação
?>