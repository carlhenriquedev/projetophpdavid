<?php

    $hostname = "localhost";
    $usuario = "root";
    $password = "";
    $bancodedados = "bd_carlosphp_mod2";

/*  
    $hostname = "192.168.1.45";
    $usuario = "DS2015";
    $password = "123@abcd";
    $bancodedados = "bd_carlos";
*/

    $conexao = new mysqli($hostname, $usuario, $password, $bancodedados);
?>

