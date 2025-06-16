<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - clickBest</title>
  <link rel="stylesheet" href="css/login.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
  <main class="form-container">
    <a class="voltar" href="index.php"><i class="bi bi-arrow-left"></i></a>
    <h1><span class="orange">Login no</span> <span class="blue">clickBest</span></h1>
    <p class="subtitle">Acesse sua conta para votar nos melhores!</p>

    <form action="subs/validacao.php" method="POST" class="form">

      <?php
      session_start();
      if(isset($_SESSION["mensagem"])){
        echo "<p class='mensagem'>" . $_SESSION["mensagem"] . "</p>";
        unset($_SESSION["mensagem"]);
      }
      ?>
      <input type="email" name="email" placeholder="E-mail" required />
      <input type="password" name="password_hash" placeholder="Senha" required />
      <button type="submit" name="submit" class="btn-blue">Entrar</button>

    </form>

    <p class="register-redirect">Ainda não tem conta? <a href="cadastro.php">Cadastrar</a></p>
  </main>
</body>

</html>