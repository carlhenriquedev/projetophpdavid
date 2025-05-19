<?php

    session_start();

    if (!isset($_SESSION["senha"]) == true AND (!isset($_SESSION["email"]) == true)) {

        unset($_SESSION["email"]);
        unset($_SESSION["senha"]);
        header("Location: login.php");
    }
    else {
        $logado = $_SESSION["email"];
    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Usuario autorizado</h1>

    <a href="sair.php">sair</a>
</body>
</html>