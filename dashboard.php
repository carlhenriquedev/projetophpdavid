<?php

session_start();

if (!isset($_SESSION["senha"]) == true and (!isset($_SESSION["email"]) == true)) {

  unset($_SESSION["email"]);
  unset($_SESSION["senha"]);
  header("Location: login.php");
} else {
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
      <a href="sair.php" class="logout">logo out</a>
    </header>

    <div class="user">
      <span class="username">Olá, <?php echo ($_SESSION["email"]); ?> !</span>
    </div>

    <section>

      <h2>Votações Ativas</h2>

      <div class="categoria" data-categoria="cantor">
        <button class="carousel-btn left" onclick="scrollCarousel('left')">&#10094;</button>

        <div class="cards-carousel">

          <div class="card">
            <div class="img-card"><img src="img/perfil-de-usuario.webp" alt=""></div>
            <div class="info-card">
              <h3>Lorem ipsum, dolor sit amet</h3>
              <p>Vote agora no seu favorito!</p>
            </div>
            <button class="vote-btn" data-categoria="cantor" data-valor="artista1">Votar</button>
          </div>

          <div class="card">
            <div class="img-card"><img src="img/perfil-de-usuario.webp" alt=""></div>
            <div class="info-card">
              <h3>Lorem ipsum, dolor sit amet</h3>
              <p>Vote agora no seu favorito!</p>
            </div>
            <button class="vote-btn" data-categoria="cantor" data-valor="artista2">Votar</button>
          </div>

          <div class="card">
            <div class="img-card"><img src="img/perfil-de-usuario.webp" alt=""></div>
            <div class="info-card">
              <h3>Lorem ipsum, dolor sit amet</h3>
              <p>Vote agora no seu favorito!</p>
            </div>
            <button class="vote-btn" data-categoria="cantor" data-valor="artista3">Votar</button>
          </div>

          <div class="card">
            <div class="img-card"><img src="img/perfil-de-usuario.webp" alt=""></div>
            <div class="info-card">
              <h3>Lorem ipsum, dolor sit amet</h3>
              <p>Vote agora no seu favorito!</p>
            </div>
            <button class="vote-btn" data-categoria="cantor" data-valor="artista4">Votar</button>
          </div>

        </div>

        <button class="carousel-btn right" onclick="scrollCarousel('right')">&#10095;</button>
      </div>

      <form action="votar.php" method="post">
        <div class="hiden">
          <input type="radio" name="cantor" value="artista1" id="cantor-artista1">
          <input type="radio" name="cantor" value="artista2" id="cantor-artista2">
          <input type="radio" name="cantor" value="artista3" id="cantor-artista3">
          <input type="radio" name="cantor" value="artista4" id="cantor-artista4">

        </div>

        <button type="submit" id="submit-btn">Registrar Votos</button>
      </form>

    </section>
  </main>

  <script src="script.js"></script>
</body>

</html>