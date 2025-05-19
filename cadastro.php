<?php

    if (isset($_POST['submit'])) {

        include("connection.php");

        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $result = mysqli_query( $conexao, "INSERT INTO usuarios(nome, email, senha)
        VALUES ('$nome', '$email', '$senha')");
    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário cadastro</title>
</head>
<body>

    <form action="cadastro.php" method="POST">

        <h1>Cadastro</h1>

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>
        
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        
        <label for="senha">Nova senha:</label>
        <input type="password" name="senha" id="senha" required>
        <input type="submit" name="submit" value="Enviar">

    </form>
    
</body>
</html>