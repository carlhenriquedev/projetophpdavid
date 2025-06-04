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
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/dashboard.css">

  <title>Painel do Usuário - clickBest</title>

</head>
<body>
  <aside>
    <h2>Menu</h2>
    <a href="#">🗳️ relatórios</a>
  </aside>
  <main>
    <header>
      <img src="img/clickBest.png" alt="">
      <a href="sair.php" class="logout">Sair</a>
    </header>

    <section>
        <div class="user">
            <span class="username">Olá, <?php echo $logado; ?>!</span>
        </div>
           
        <h2>Votações Ativas</h2>
        <div class="cards">

            <div class="card">
                <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h3>
                <p>Vote agora no seu favorito!</p>
                <button class="vote-btn">Votar</button>
            </div>

        </div>
    </section>
  </main>
</body>
</html>