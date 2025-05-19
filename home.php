<?php

    include_once("connection.php");

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

   <style>
        body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        }

        .box {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
        gap: 20px;
        }

        a {
        text-decoration: none;
        color: white;
        background-color: #007BFF;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 18px;
        transition: background-color 0.3s;
        }

        a:hover {
        background-color: #0056b3;
        }
</style>


</head>
<body>
    <div class="box">

        <a href="/novapasta/cadastro.php">Cadastrar</a>

        <a href="/novapasta/login.php">Login</a>

    </div>
</body>
</html>