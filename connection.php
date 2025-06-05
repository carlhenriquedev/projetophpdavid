<?php

    $hostname = "localhost";
    $usuario = "root";
    $password = "";
    $bancodedados = "bd_carlosphp_mod2";

/* 
    $hostname = "192.168.1.126";
    $usuario = "ds2025";
    $password = "123@abcd";
    $bancodedados = "bd_carl_mod2";
*/

    $conexao = new mysqli($hostname, $usuario, $password, $bancodedados);
?>