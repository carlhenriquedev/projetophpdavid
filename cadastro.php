<?php

    if (isset($_POST['submit'])) {

        include("connection.php");

        $name = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password_hash"];

        $result = mysqli_query( $conexao, "INSERT INTO users(username, email, password_hash)
        VALUES ('$name', '$email', '$password')");
    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cadastro - clickBest</title>
  <link rel="stylesheet" href="css/cadastro.css"/>
</head>
<body>
  <main class="form-container">
    <h1><span class="orange">Cadastro no</span> <span class="blue">clickBest</span></h1>
    <p class="subtitle">Preencha os dados abaixo para criar sua conta.</p>

    <form action="cadastro.php" method="POST" class="form">
      <input type="text" placeholder="Nome" name="username" id="username" required />
      <input type="email" placeholder="E-mail" name="email" id="email" required />
      <input type="password" placeholder="Senha" name="password_hash" id="password_hash" required />
      <button type="submit" name="submit" class="btn-orange">Cadastrar</button>
    </form>

    <p class="login-redirect">Já tem conta? <a href="login.php">Entrar</a></p>
  </main>
</body>
</html>