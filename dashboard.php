<?php

include_once("subs/candidatos.php");


if (!isset($_SESSION["senha"]) == true and (!isset($_SESSION["email"]) == true)) {

  unset($_SESSION["email"]);
  unset($_SESSION["senha"]);
  header("Location: login.php");
} else {
  $logado = $_SESSION["email"];
}

if (isset($_POST["submit"])) {

  $usuario_id = $_SESSION['id'];

  $stmt = $conexao->prepare("DELETE FROM votes WHERE user_id = ?");
  $stmt->bind_param("i", $usuario_id);
  $stmt->execute();
  $stmt->close();

  foreach ($_POST as $categoria => $candidato_id) {
    $candidato_id = (int) $candidato_id;

    if ($categoria === 'submit') continue;
    if (empty($candidato_id)) continue;

    $stmt2 = $conexao->prepare("
      INSERT INTO votes (user_id, category, candidate_id)
      VALUES (?, ?, ?)
    ");
    $stmt2->bind_param("isi", $usuario_id, $categoria, $candidato_id);
    $stmt2->execute();
}
echo "<script>alert('Candidatos cadastrados com sucesso!');</script>";
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

  <link rel="stylesheet" href="css/dashboard.css">

  <title>Painel do Usuário - clickBest</title>

</head>

<body>
  <header>
    <img src="img/clickBest2.svg" alt="">
  </header>

  <aside>
      <div class="aside-icons">
        <a href="admin.php">
          <i class="bi bi-house-gear"></i>
          <p>Admin</p>
        </a>
        <a href="relatorios.php">
          <i class="bi bi-file-earmark-bar-graph-fill"></i>
          <p>Relatórios</p>
        </a>
        <a href="subs/sair.php">
          <i class="bi bi-door-closed"></i>
          <p>Logo out</p>
        </a>
      </div>
    </aside>

  <main>

    <div class="user">
      <span class="username">Olá, <?php echo ($_SESSION["nome"]); ?>!</span>
      <p>Bem-vindo(a) ao clickBest, você poderá fazer suas votações logo abaixo. Selecione um candidato por categoria
        e
        logo após registre seus votos no final da página.</p>
    </div>

    <section>
      <div class="titulo-categoria">
        <h2>Melhor designer:</h2>
      </div>

      <div class="categoria" data-categoria="designer">

        <button class="carousel-btn left" onclick="scrollCarousel('left', this)">&#10094;</button>

        <div class="cards-carousel">
          <?php foreach ($candidatos['designer'] as $candidato): ?>
            <div class="card">
              <div class="img-card">
                <img src="<?= htmlspecialchars($candidato['imagem']) ?>" onerror="this.onerror=null; this.src='uploads/user0.webp';">
              </div>
              <div class="info-card">
                <h3><?= htmlspecialchars($candidato['nome']) ?></h3>
                <h4 class="badge1">Designer</h4>
                <p>Vote agora no seu favorito!</p>
              </div>
              <button class="vote-btn" data-categoria="designer" data-valor="<?= $candidato['id'] ?>">Selecionar</button>
            </div>
          <?php endforeach; ?>
        </div>

        <button class="carousel-btn right" onclick="scrollCarousel('right', this)">&#10095;</button>
        
      </div>
    </section>

    <section>
      <div class="titulo-categoria">
        <h2>Melhor Front-end:</h2>
      </div>
      <div class="categoria" data-categoria="frontend">
        <button class="carousel-btn left" onclick="scrollCarousel('left', this)">&#10094;</button>
        <div class="cards-carousel">
          <?php foreach ($candidatos['frontend'] as $candidato): ?>
            <div class="card">
              <div class="img-card">
                <img src="<?= htmlspecialchars($candidato['imagem']) ?>" onerror="this.onerror=null; this.src='uploads/user0.webp';">
              </div>
              <div class="info-card">
                <h3><?= htmlspecialchars($candidato['nome']) ?></h3>
                <h4 class="badge2">Front-end</h4>
                <p>Vote agora no seu favorito!</p>
              </div>
              <button class="vote-btn" data-categoria="frontend" data-valor="<?= $candidato['id'] ?>">Selecionar</button>
            </div>
          <?php endforeach; ?>
        </div>
        <button class="carousel-btn right" onclick="scrollCarousel('right', this)">&#10095;</button>
      </div>
    </section>

    <section>
      <div class="titulo-categoria">
        <h2>Melhor Back-end:</h2>
      </div>
      <div class="categoria" data-categoria="backend">
        <button class="carousel-btn left" onclick="scrollCarousel('left', this)">&#10094;</button>
        <div class="cards-carousel">
          <?php foreach ($candidatos['backend'] as $candidato): ?>
            <div class="card">
              <div class="img-card">
                <img src="<?= htmlspecialchars($candidato['imagem']) ?>" onerror="this.onerror=null; this.src='uploads/user0.webp';">
              </div>
              <div class="info-card">
                <h3><?= htmlspecialchars($candidato['nome']) ?></h3>
                <h4 class="badge3">Back-end</h4>
                <p>Vote agora no seu favorito!</p>
              </div>
              <button class="vote-btn" data-categoria="backend" data-valor="<?= $candidato['id'] ?>">Selecionar</button>
            </div>
          <?php endforeach; ?>
        </div>
        <button class="carousel-btn right" onclick="scrollCarousel('right', this)">&#10095;</button>
      </div>
    </section>

    <section>
      <div class="titulo-categoria">
        <h2>Melhor Fullstack:</h2>
      </div>
      <div class="categoria" data-categoria="fullstack">
        <button class="carousel-btn left" onclick="scrollCarousel('left', this)">&#10094;</button>
        <div class="cards-carousel">
          <?php foreach ($candidatos['fullstack'] as $candidato): ?>
            <div class="card">
              <div class="img-card">
                <img src="<?= htmlspecialchars($candidato['imagem']) ?>" onerror="this.onerror=null; this.src='uploads/user0.webp';">
              </div>
              <div class="info-card">
                <h3><?= htmlspecialchars($candidato['nome']) ?></h3>
                <h4 class="badge4">Fullstack</h4>
                <p>Vote agora no seu favorito!</p>
              </div>
              <button class="vote-btn" data-categoria="fullstack" data-valor="<?= $candidato['id'] ?>">Selecionar</button>
            </div>
          <?php endforeach; ?>
        </div>
        <button class="carousel-btn right" onclick="scrollCarousel('right', this)">&#10095;</button>
      </div>
    </section>

    <section>
      <div class="titulo-categoria">
        <h2>Melhor Dupla:</h2>
      </div>
      <div class="categoria" data-categoria="dupla">
        <button class="carousel-btn left" onclick="scrollCarousel('left', this)">&#10094;</button>
        <div class="cards-carousel">
          <?php foreach ($candidatos['dupla'] as $candidato): ?>
            <div class="card">
              <div class="img-card">
                <img src="<?= htmlspecialchars($candidato['imagem']) ?>" onerror="this.onerror=null; this.src='uploads/user0.webp';">
              </div>
              <div class="info-card">
                <h3><?= htmlspecialchars($candidato['nome']) ?></h3>
                <h4 class="badge5">Dupla</h4>
                <p>Vote agora no seu favorito!</p>
              </div>
              <button class="vote-btn" data-categoria="dupla" data-valor="<?= $candidato['id'] ?>">Selecionar</button>
            </div>
          <?php endforeach; ?>
        </div>
        <button class="carousel-btn right" onclick="scrollCarousel('right', this)">&#10095;</button>
      </div>
    </section>

    <section>
      <div class="titulo-categoria">
        <h2>Mais Resenha:</h2>
      </div>
      <div class="categoria" data-categoria="resenha">
        <button class="carousel-btn left" onclick="scrollCarousel('left', this)">&#10094;</button>
        <div class="cards-carousel">
          <?php foreach ($candidatos['resenha'] as $candidato): ?>
            <div class="card">
              <div class="img-card">
                <img src="<?= htmlspecialchars($candidato['imagem']) ?>" onerror="this.onerror=null; this.src='uploads/user0.webp';">
              </div>
              <div class="info-card">
                <h3><?= htmlspecialchars($candidato['nome']) ?></h3>
                <h4 class="badge6">Resenha</h4>
                <p>Vote agora no seu favorito!</p>
              </div>
              <button class="vote-btn" data-categoria="resenha" data-valor="<?= $candidato['id'] ?>">Selecionar</button>
            </div>
          <?php endforeach; ?>
        </div>
        <button class="carousel-btn right" onclick="scrollCarousel('right', this)">&#10095;</button>
      </div>
    </section>

    <section>
      <div class="titulo-categoria">
        <h2>Mais Simpático:</h2>
      </div>
      <div class="categoria" data-categoria="simpatico">
        <button class="carousel-btn left" onclick="scrollCarousel('left', this)">&#10094;</button>
        <div class="cards-carousel">
          <?php foreach ($candidatos['simpatico'] as $candidato): ?>
            <div class="card">
              <div class="img-card">
                <img src="<?= htmlspecialchars($candidato['imagem']) ?>" onerror="this.onerror=null; this.src='uploads/user0.webp';">
              </div>
              <div class="info-card">
                <h3><?= htmlspecialchars($candidato['nome']) ?></h3>
                <h4 class="badge7">Simpático</h4>
                <p>Vote agora no seu favorito!</p>
              </div>
              <button class="vote-btn" data-categoria="simpatico" data-valor="<?= $candidato['id'] ?>">Selecionar</button>
            </div>
          <?php endforeach; ?>
        </div>
        <button class="carousel-btn right" onclick="scrollCarousel('right', this)">&#10095;</button>
      </div>
    </section>

    <section>
      <div class="titulo-categoria">
        <h2>Melhor Professor:</h2>
      </div>
      <div class="categoria" data-categoria="professor">
        <button class="carousel-btn left" onclick="scrollCarousel('left', this)">&#10094;</button>
        <div class="cards-carousel">
          <?php foreach ($candidatos['professor'] as $candidato): ?>
            <div class="card">
              <div class="img-card">
                <img src="<?= htmlspecialchars($candidato['imagem']) ?>" onerror="this.onerror=null; this.src='uploads/user0.webp';">
              </div>
              <div class="info-card">
                <h3><?= htmlspecialchars($candidato['nome']) ?></h3>
                <h4 class="badge8">Professor</h4>
                <p>Vote agora no seu favorito!</p>
              </div>
              <button class="vote-btn" data-categoria="professor" data-valor="<?= $candidato['id'] ?>">Selecionar</button>
            </div>
          <?php endforeach; ?>
        </div>
        <button class="carousel-btn right" onclick="scrollCarousel('right', this)">&#10095;</button>
      </div>
    </section>

    <form id="form-votacao" class="form" action="dashboard.php" method="post">
      <div class="hiden">
        <?php
        foreach ($candidatos as $categoria => $lista) {
          foreach ($lista as $candidato) {
            $id = htmlspecialchars($candidato['id']);
            $nome = htmlspecialchars($candidato['nome']);
            echo "<input type='radio' name='$categoria' value='$id' id='{$categoria}-$id'>";
          }
          echo "<br>";
        }
        ?>
      </div>

      <button type="submit" name="submit" id="submit-btn">Registrar Votos</button>
    </form>

  </main>
  <footer>
    <p>clickBest 2025 &copy; todos os direitos reservados</p>
  </footer>



  <script src="scripts/dashboard.js"></script>
</body>

</html>