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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

  <link rel="stylesheet" href="css/dashboard.css">

  <title>Painel do Usuário - clickBest</title>

</head>

<body>
  <header>
    <img src="img/clickBest.png" alt="">
  </header>
  <div class="interface">
    <aside>
      <div class="aside-icons">
        <a href="#">
          <i class="bi bi-file-earmark-bar-graph-fill"></i>
          <p>Relatórios</p>
        </a>
        <a href="sair.php">
          <i class="bi bi-door-closed"></i>
          <p>Logo out</p>
        </a>
      </div>
    </aside>

    <main>

      <div class="user">
        <span class="username">Olá, <?php echo ($_SESSION["email"]); ?>!</span>
        <p>Bem-vindo(a) ao clickBest, você poderá fazer suas votações logo abaixo. Selecione um candidato por categoria
          e
          logo após registre seus votos no final da página.</p>
      </div>

      <section>

        <div class="titulo-categoria">
          <h2>Melhor designer:</h2>
        </div>

        <div class="categoria" data-categoria="design">
          <button class="carousel-btn left" onclick="scrollCarousel('left')">&#10094;</button>

          <div class="cards-carousel">

            <div class="card">
              <div class="img-card"><img src="img/perfil-de-usuario.webp" alt=""></div>
              <div class="info-card">
                <h3>Eduarda Elvira Alves</h3>
                <h4 class="badge1">Designer</h4>
                <p>Vote agora no seu favorito!</p>
              </div>
              <button class="vote-btn" data-categoria="design" data-valor="designer1">Selecionar</button>
            </div>

            <div class="card">
              <div class="img-card"><img src="img/perfil-de-usuario.webp" alt=""></div>
              <div class="info-card">
                <h3>Luciana De Souza</h3>
                <h4 class="badge1">Designer</h4>
                <p>Vote agora no seu favorito!</p>
              </div>
              <button class="vote-btn" data-categoria="design" data-valor="designer2">Selecionar</button>
            </div>

            <div class="card">
              <div class="img-card"><img src="img/perfil-de-usuario.webp" alt=""></div>
              <div class="info-card">
                <h3>Richard Wallace Lins</h3>
                <h4 class="badge1">Designer</h4>
                <p>Vote agora no seu favorito!</p>
              </div>
              <button class="vote-btn" data-categoria="design" data-valor="designer3">Selecionar</button>
            </div>

          </div>

          <button class="carousel-btn right" onclick="scrollCarousel('right')">&#10095;</button>
        </div>

      </section>

      <section>

        <div class="titulo-categoria">
          <h2>Melhor frontend:</h2>
        </div>

        <div class="categoria" data-categoria="front">
          <button class="carousel-btn left" onclick="scrollCarousel('left')">&#10094;</button>

          <div class="cards-carousel">

            <div class="card">
              <div class="img-card"><img src="img/perfil-de-usuario.webp" alt=""></div>
              <div class="info-card">
                <h3>Eduarda Elvira Alves</h3>
                <h4 class="badge2">Front-end</h4>
                <p>Vote agora no seu favorito!</p>
              </div>
              <button class="vote-btn" data-categoria="front" data-valor="frontend1">Selecionar</button>
            </div>

            <div class="card">
              <div class="img-card"><img src="img/perfil-de-usuario.webp" alt=""></div>
              <div class="info-card">
                <h3>Luciana de Souza</h3>
                <h4 class="badge2">Front-end</h4>
                <p>Vote agora no seu favorito!</p>
              </div>
              <button class="vote-btn" data-categoria="front" data-valor="frontend2">Selecionar</button>
            </div>

            <div class="card">
              <div class="img-card"><img src="img/perfil-de-usuario.webp" alt=""></div>
              <div class="info-card">
                <h3>Leandro Mariano Silva</h3>
                <h4 class="badge2">Front-end</h4>
                <p>Vote agora no seu favorito!</p>
              </div>
              <button class="vote-btn" data-categoria="front" data-valor="frontend3">Selecionar</button>
            </div>

            <div class="card">
              <div class="img-card"><img src="img/perfil-de-usuario.webp" alt=""></div>
              <div class="info-card">
                <h3>Richard Wallace Lins</h3>
                <h4 class="badge2">Front-end</h4>
                <p>Vote agora no seu favorito!</p>
              </div>
              <button class="vote-btn" data-categoria="front" data-valor="frontend4">Selecionar</button>
            </div>

          </div>

          <button class="carousel-btn right" onclick="scrollCarousel('right')">&#10095;</button>
        </div>

      </section>

      <section>
        <div class="titulo-categoria">
          <h2>Melhor backend:</h2>
        </div>

        <div class="categoria" data-categoria="back">
          <button class="carousel-btn left" onclick="scrollCarousel('left')">&#10094;</button>

          <div class="cards-carousel">

            <div class="card">
              <div class="img-card"><img src="img/perfil-de-usuario.webp" alt=""></div>
              <div class="info-card">
                <h3>Abrivaldo Rodrigues Neto</h3>
                <h4 class="badge3">Back-end</h4>
                <p>Vote agora no seu favorito!</p>
              </div>
              <button class="vote-btn" data-categoria="back" data-valor="backend1">Selecionar</button>
            </div>

            <div class="card">
              <div class="img-card"><img src="img/perfil-de-usuario.webp" alt=""></div>
              <div class="info-card">
                <h3>Carl Henrique Santos</h3>
                <h4 class="badge3">Back-end</h4>
                <p>Vote agora no seu favorito!</p>
              </div>
              <button class="vote-btn" data-categoria="back" data-valor="backend2">Selecionar</button>
            </div>

            <div class="card">
              <div class="img-card"><img src="img/perfil-de-usuario.webp" alt=""></div>
              <div class="info-card">
                <h3>Ismael Correia Bione</h3>
                <h4 class="badge3">Back-end</h4>
                <p>Vote agora no seu favorito!</p>
              </div>
              <button class="vote-btn" data-categoria="back" data-valor="backend3">Selecionar</button>
            </div>

            <div class="card">
              <div class="img-card"><img src="img/perfil-de-usuario.webp" alt=""></div>
              <div class="info-card">
                <h3>Leandro Mariano Silva</h3>
                <h4 class="badge3">Back-end</h4>
                <p>Vote agora no seu favorito!</p>
              </div>
              <button class="vote-btn" data-categoria="back" data-valor="backend4">Selecionar</button>
            </div>

            <div class="card">
              <div class="img-card"><img src="img/perfil-de-usuario.webp" alt=""></div>
              <div class="info-card">
                <h3>Mario Barros Oliveira</h3>
                <h4 class="badge3">Back-end</h4>
                <p>Vote agora no seu favorito!</p>
              </div>
              <button class="vote-btn" data-categoria="back" data-valor="backend5">Selecionar</button>
            </div>

            <div class="card">
              <div class="img-card"><img src="img/perfil-de-usuario.webp" alt=""></div>
              <div class="info-card">
                <h3>Matheus Xavier de Souza</h3>
                <h4 class="badge3">Back-end</h4>
                <p>Vote agora no seu favorito!</p>
              </div>
              <button class="vote-btn" data-categoria="back" data-valor="backend6">Selecionar</button>
            </div>

            <div class="card">
              <div class="img-card"><img src="img/perfil-de-usuario.webp" alt=""></div>
              <div class="info-card">
                <h3>Paulo Henrique da Silva</h3>
                <h4 class="badge3">Back-end</h4>
                <p>Vote agora no seu favorito!</p>
              </div>
              <button class="vote-btn" data-categoria="back" data-valor="backend7">Selecionar</button>
            </div>

            <div class="card">
              <div class="img-card"><img src="img/perfil-de-usuario.webp" alt=""></div>
              <div class="info-card">
                <h3>Richard Wallace Lins</h3>
                <h4 class="badge3">Back-end</h4>
                <p>Vote agora no seu favorito!</p>
              </div>
              <button class="vote-btn" data-categoria="back" data-valor="backend8">Selecionar</button>
            </div>

          </div>

          <button class="carousel-btn right" onclick="scrollCarousel('right')">&#10095;</button>
        </div>

      </section>

      <section>
        <div class="titulo-categoria">
          <h2>Melhor fullstack:</h2>
        </div>

        <div class="categoria" data-categoria="full">
          <button class="carousel-btn left" onclick="scrollCarousel('left')">&#10094;</button>

          <div class="cards-carousel">

            <div class="card">
              <div class="img-card"><img src="img/perfil-de-usuario.webp" alt=""></div>
              <div class="info-card">
                <h3>Mario Barros Oliveira</h3>
                <h4 class="badge4">Full-stack</h4>
                <p>Vote agora no seu favorito!</p>
              </div>
              <button class="vote-btn" data-categoria="full" data-valor="fullstack1">Selecionar</button>
            </div>

            <div class="card">
              <div class="img-card"><img src="img/perfil-de-usuario.webp" alt=""></div>
              <div class="info-card">
                <h3>Richard Wallace Lins</h3>
                <h4 class="badge4">Full-stack</h4>
                <p>Vote agora no seu favorito!</p>
              </div>
              <button class="vote-btn" data-categoria="full" data-valor="fullstack2">Selecionar</button>
            </div>

          </div>

          <button class="carousel-btn right" onclick="scrollCarousel('right')">&#10095;</button>
        </div>

      </section>

      <section>
        <div class="titulo-categoria">
          <h2>Melhor dupla:</h2>
        </div>

        <div class="categoria" data-categoria="duo">
          <button class="carousel-btn left" onclick="scrollCarousel('left')">&#10094;</button>

          <div class="cards-carousel">

            <div class="card">
              <div class="img-card"><img src="img/perfil-de-usuario.webp" alt=""></div>
              <div class="info-card">
                <h3>Eduarda Elvira e Luciana Souza</h3>
                <h4 class="badge5">Dupla</h4>
                <p>Vote agora no seu favorito!</p>
              </div>
              <button class="vote-btn" data-categoria="duo" data-valor="dupla1">Selecionar</button>
            </div>

            <div class="card">
              <div class="img-card"><img src="img/perfil-de-usuario.webp" alt=""></div>
              <div class="info-card">
                <h3>Ismael Bione e Richard Wallace</h3>
                <h4 class="badge5">Dupla</h4>
                <p>Vote agora no seu favorito!</p>
              </div>
              <button class="vote-btn" data-categoria="duo" data-valor="dupla2">Selecionar</button>
            </div>

            <div class="card">
              <div class="img-card"><img src="img/perfil-de-usuario.webp" alt=""></div>
              <div class="info-card">
                <h3>João Raimundo e Leandro Mariano</h3>
                <h4 class="badge5">Dupla</h4>
                <p>Vote agora no seu favorito!</p>
              </div>
              <button class="vote-btn" data-categoria="duo" data-valor="dupla3">Selecionar</button>
            </div>

            <div class="card">
              <div class="img-card"><img src="img/perfil-de-usuario.webp" alt=""></div>
              <div class="info-card">
                <h3>Matheus Xavier e Paulo Henrique</h3>
                <h4 class="badge5">Dupla</h4>
                <p>Vote agora no seu favorito!</p>
              </div>
              <button class="vote-btn" data-categoria="duo" data-valor="dupla4">Selecionar</button>
            </div>

          </div>

          <button class="carousel-btn right" onclick="scrollCarousel('right')">&#10095;</button>
        </div>

      </section>

      <section>
        <div class="titulo-categoria">
          <h2>Rei da resenha:</h2>
        </div>

        <div class="categoria" data-categoria="resenha">
          <button class="carousel-btn left" onclick="scrollCarousel('left')">&#10094;</button>

          <div class="cards-carousel">

            <div class="card">
              <div class="img-card"><img src="img/perfil-de-usuario.webp" alt=""></div>
              <div class="info-card">
                <h3>Carl Henrique Santos</h3>
                <h4 class="badge6">Resenha</h4>
                <p>Vote agora no seu favorito!</p>
              </div>
              <button class="vote-btn" data-categoria="resenha" data-valor="reidaresenha1">Selecionar</button>
            </div>

            <div class="card">
              <div class="img-card"><img src="img/perfil-de-usuario.webp" alt=""></div>
              <div class="info-card">
                <h3>Ismael Correia Bione</h3>
                <h4 class="badge6">Resenha</h4>
                <p>Vote agora no seu favorito!</p>
              </div>
              <button class="vote-btn" data-categoria="resenha" data-valor="reidaresenha2">Selecionar</button>
            </div>

            <div class="card">
              <div class="img-card"><img src="img/perfil-de-usuario.webp" alt=""></div>
              <div class="info-card">
                <h3>Matheus Xavier de Souza</h3>
                <h4 class="badge6">Resenha</h4>
                <p>Vote agora no seu favorito!</p>
              </div>
              <button class="vote-btn" data-categoria="resenha" data-valor="reidaresenha3">Selecionar</button>
            </div>

            <div class="card">
              <div class="img-card"><img src="img/perfil-de-usuario.webp" alt=""></div>
              <div class="info-card">
                <h3>Richard Wallace Lins</h3>
                <h4 class="badge6">Resenha</h4>
                <p>Vote agora no seu favorito!</p>
              </div>
              <button class="vote-btn" data-categoria="resenha" data-valor="reidaresenha4">Selecionar</button>
            </div>

          </div>

          <button class="carousel-btn right" onclick="scrollCarousel('right')">&#10095;</button>
        </div>
      </section>

      <section>
        <div class="titulo-categoria">
          <h2>A mais gente boa:</h2>
        </div>

        <div class="categoria" data-categoria="genteboa">
          <button class="carousel-btn left" onclick="scrollCarousel('left')">&#10094;</button>

          <div class="cards-carousel">

            <div class="card">
              <div class="img-card"><img src="img/perfil-de-usuario.webp" alt=""></div>
              <div class="info-card">
                <h3>Ailton Robson de Oliveira</h3>
                <h4 class="badge7">Simpático</h4>
                <p>Vote agora no seu favorito!</p>
              </div>
              <button class="vote-btn" data-categoria="genteboa" data-valor="simpatico1">Selecionar</button>
            </div>

            <div class="card">
              <div class="img-card"><img src="img/perfil-de-usuario.webp" alt=""></div>
              <div class="info-card">
                <h3>Eduarda Elvira Alves</h3>
                <h4 class="badge7">Simpático</h4>
                <p>Vote agora no seu favorito!</p>
              </div>
              <button class="vote-btn" data-categoria="genteboa" data-valor="simpatico2">Selecionar</button>
            </div>

            <div class="card">
              <div class="img-card"><img src="img/perfil-de-usuario.webp" alt=""></div>
              <div class="info-card">
                <h3>Hugo Gabriel Silva</h3>
                <h4 class="badge7">Simpático</h4>
                <p>Vote agora no seu favorito!</p>
              </div>
              <button class="vote-btn" data-categoria="genteboa" data-valor="simpatico3">Selecionar</button>
            </div>

            <div class="card">
              <div class="img-card"><img src="img/perfil-de-usuario.webp" alt=""></div>
              <div class="info-card">
                <h3>Leandro Mariano Silva</h3>
                <h4 class="badge7">Simpático</h4>
                <p>Vote agora no seu favorito!</p>
              </div>
              <button class="vote-btn" data-categoria="genteboa" data-valor="simpatico4">Selecionar</button>
            </div>

            <div class="card">
              <div class="img-card"><img src="img/perfil-de-usuario.webp" alt=""></div>
              <div class="info-card">
                <h3>Luciana De Souza</h3>
                <h4 class="badge7">Simpático</h4>
                <p>Vote agora no seu favorito!</p>
              </div>
              <button class="vote-btn" data-categoria="genteboa" data-valor="simpatico5">Selecionar</button>
            </div>

          </div>

          <button class="carousel-btn right" onclick="scrollCarousel('right')">&#10095;</button>
        </div>
      </section>

      <section>

        <div class="titulo-categoria">
          <h2>Melhor professor:</h2>
        </div>

        <div class="categoria" data-categoria="professor">
          <button class="carousel-btn left" onclick="scrollCarousel('left')">&#10094;</button>

          <div class="cards-carousel">

            <div class="card">
              <div class="img-card"><img src="img/perfil-de-usuario.webp" alt=""></div>
              <div class="info-card">
                <h3>Allisson Tércio</h3>
                <h4 class="badge8">Professor(a)</h4>
                <p>Vote agora no seu favorito!</p>
              </div>
              <button class="vote-btn" data-categoria="professor" data-valor="professor1">Selecionar</button>
            </div>

            <div class="card">
              <div class="img-card"><img src="img/perfil-de-usuario.webp" alt=""></div>
              <div class="info-card">
                <h3>David Remígio</h3>
                <h4 class="badge8">Professor(a)</h4>
                <p>Vote agora no seu favorito!</p>
              </div>
              <button class="vote-btn" data-categoria="professor" data-valor="professor2">Selecionar</button>
            </div>

            <div class="card">
              <div class="img-card"><img src="img/perfil-de-usuario.webp" alt=""></div>
              <div class="info-card">
                <h3>Jorge</h3>
                <h4 class="badge8">Professor(a)</h4>
                <p>Vote agora no seu favorito!</p>
              </div>
              <button class="vote-btn" data-categoria="professor" data-valor="professor3">Selecionar</button>
            </div>

            <div class="card">
              <div class="img-card"><img src="img/perfil-de-usuario.webp" alt=""></div>
              <div class="info-card">
                <h3>Luiz Carlos</h3>
                <h4 class="badge8">Professor(a)</h4>
                <p>Vote agora no seu favorito!</p>
              </div>
              <button class="vote-btn" data-categoria="professor" data-valor="professor4">Selecionar</button>
            </div>

            <div class="card">
              <div class="img-card"><img src="img/perfil-de-usuario.webp" alt=""></div>
              <div class="info-card">
                <h3>Valéria</h3>
                <h4 class="badge9">Professor(a)</h4>
                <p>Vote agora no seu favorito!</p>
              </div>
              <button class="vote-btn" data-categoria="professor" data-valor="professor5">Selecionar</button>
            </div>
            
          </div>

          <button class="carousel-btn right" onclick="scrollCarousel('right')">&#10095;</button>
        </div>

      </section>


      <form class="form" action="votar.php" method="post">
        <div class="hiden">
          <input type="radio" name="design" value="designer1" id="design-designer1">
          <input type="radio" name="design" value="designer2" id="design-designer2">
          <input type="radio" name="design" value="designer3" id="design-designer3">
          <br>
          <input type="radio" name="front" value="frontend1" id="front-frontend1">
          <input type="radio" name="front" value="frontend2" id="front-frontend2">
          <input type="radio" name="front" value="frontend3" id="front-frontend3">
          <input type="radio" name="front" value="frontend4" id="front-frontend4">
          <br>
          <input type="radio" name="back" value="backend1" id="back-backend1">
          <input type="radio" name="back" value="backend2" id="back-backend2">
          <input type="radio" name="back" value="backend3" id="back-backend3">
          <input type="radio" name="back" value="backend4" id="back-backend4">
          <input type="radio" name="back" value="backend5" id="back-backend5">
          <input type="radio" name="back" value="backend6" id="back-backend6">
          <input type="radio" name="back" value="backend7" id="back-backend7">
          <input type="radio" name="back" value="backend8" id="back-backend8">
          <br>
          <input type="radio" name="full" value="fullstack1" id="full-fullstack1">
          <input type="radio" name="full" value="fullstack2" id="full-fullstack2">
          <br>
          <input type="radio" name="duo" value="dupla1" id="duo-dupla1">
          <input type="radio" name="duo" value="dupla2" id="duo-dupla2">
          <input type="radio" name="duo" value="dupla3" id="duo-dupla3">
          <input type="radio" name="duo" value="dupla4" id="duo-dupla4">
          <br>
          <input type="radio" name="resenha" value="reidaresenha1" id="resenha-reidaresenha1">
          <input type="radio" name="resenha" value="reidaresenha2" id="resenha-reidaresenha2">
          <input type="radio" name="resenha" value="reidaresenha3" id="resenha-reidaresenha3">
          <input type="radio" name="resenha" value="reidaresenha4" id="resenha-reidaresenha4">
          <br>
          <input type="radio" name="genteboa" value="simpatico1" id="genteboa-simpatico1">
          <input type="radio" name="genteboa" value="simpatico2" id="genteboa-simpatico2">
          <input type="radio" name="genteboa" value="simpatico3" id="genteboa-simpatico3">
          <input type="radio" name="genteboa" value="simpatico4" id="genteboa-simpatico4">
          <input type="radio" name="genteboa" value="simpatico5" id="genteboa-simpatico5">
          <br>
          <input type="radio" name="professor" value="professor1" id="professor-professor1">
          <input type="radio" name="professor" value="professor2" id="professor-professor2">
          <input type="radio" name="professor" value="professor3" id="professor-professor3">
          <input type="radio" name="professor" value="professor4" id="professor-professor4">
          <input type="radio" name="professor" value="professor5" id="professor-professor5">


        </div>

        <button type="submit" id="submit-btn">Registrar Votos</button>
      </form>

    </main>
  </div>
  <footer>
    <p>clickBest 2025 &copy; todos os direitos reservados</p>
  </footer>



  <script src="script.js"></script>
</body>

</html>