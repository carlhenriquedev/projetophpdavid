<?php
session_start();

$mensagem = "";

if (isset($_SESSION['mensagem'])) {
  $mensagem = $_SESSION['mensagem'];
  unset($_SESSION['mensagem']);
}


if (isset($_POST['submit'])) {

  include("config/connection.php");

  $name = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password_hash"];

  $check = mysqli_query($conexao, "SELECT id FROM users WHERE email = '$email'");

  if (mysqli_num_rows($check) > 0) {
    $_SESSION['mensagem'] = "E-mail já cadastrado. Use outro.";
  } else {
    $insert = mysqli_query($conexao, "INSERT INTO users(username, email, password_hash) VALUES ('$name', '$email', '$password')");

    if ($insert) {
      $_SESSION['mensagem'] = "Usuário cadastrado com sucesso!";
    } else {
      $_SESSION['mensagem'] = "Erro ao cadastrar. Tente novamente.";
    }
  }

  header("Location: cadastro.php");
  exit;
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cadastro - clickBest</title>
  <link rel="stylesheet" href="css/cadastro.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

</head>

<body>
  <main class="form-container">
    <a class="voltar" href="index.php"><i class="bi bi-arrow-left"></i></a>
    <h1><span class="orange">Cadastro no</span> <span class="blue">clickBest</span></h1>
    <p class="subtitle">Preencha os dados abaixo para criar sua conta.</p>

    <form action="cadastro.php" method="POST" class="form">
      <input type="text" placeholder="Nome" name="username" id="username" required />
      <input type="email" placeholder="E-mail" name="email" id="email" required />
      <input type="password" placeholder="Senha" name="password_hash" id="password_hash" required />
      <?php

      if (!empty($mensagem)) {
        echo "<div class='mensagem-box'><p class='mensagem'>$mensagem</p></div>";
      }

      ?>
      <button type="submit" name="submit"
      class="btn-orange">Cadastrar</button>
    </form>

    <p class="login-redirect">Já tem conta? <a href="login.php">Entrar</a></p>
  </main>
</body>

</html>