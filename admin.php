<?php

include_once("subs/candidatos.php");

if ($_SESSION["is_admin"] != 1) {
  echo "<a href='dashboard.php'>voltar</a>";
  echo "<p style='color: red; text-align: center; margin-top: 20px;'>Acesso negado: você não tem permissão para acessar esta área.</p>";
  exit;
}

if (isset($_POST['delete_id'])) {
  $idRemover = $_POST['delete_id'];

  $stmt1 = $conexao->prepare("UPDATE candidates SET removed_at = NOW() WHERE id = ?");
  $stmt1->bind_param("i", $idRemover);
  $stmt1->execute();
  $stmt1->close();
}


if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["add_candidato"])) {


  $nome = $_POST["nome"];
  $categoria = $_POST["categoria"];

  $nomeImagem = basename($_FILES["foto"]["name"]);

  $nomeLimpo = iconv('UTF-8', 'ASCII//TRANSLIT', $nomeImagem);

  $nomeLimpo = preg_replace('/[^A-Za-z0-9_\-\.]/', '', $nomeLimpo);

  $nomeLimpo = str_replace(' ', '_', $nomeLimpo);

  $caminhoFinal = "uploads/" . $nomeLimpo;

  move_uploaded_file($_FILES["foto"]["tmp_name"], $caminhoFinal);

  $stmt2 = $conexao->prepare("INSERT INTO candidates (nome, category, imagem) VALUES (?, ?, ?)");
  $stmt2->bind_param("sss", $nome, $categoria, $caminhoFinal);

  if ($stmt2->execute()) {
    header("Location: admin.php?success=1");
  } else {
    echo "Erro ao salvar no banco: " . $stmt2->error;
  }
  $stmt2->close();
}
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/admin.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

  <title>Admin</title>
</head>

<body>

  <header>
    <a class="voltar" href="dashboard.php"><i class="bi bi-arrow-left"></i></a>
    <h1>Admin - clickBest</h1>
  </header>

  <div class="container">

    <form class="add" action="admin.php" method="post" enctype="multipart/form-data">
      <h2>Adicionar candidatos:</h2>
      <input type="text" name="nome" placeholder="Nome do candidato" maxlength="35" required>
      <select name="categoria" required>
        <option value="designer">Designer</option>
        <option value="frontend">Frontend</option>
        <option value="backend">Backend</option>
        <option value="fullstack">Fullstack</option>
        <option value="dupla">Dupla</option>
        <option value="resenha">Resenha</option>
        <option value="simpatico">Simpático</option>
        <option value="professor">Professor</option>
      </select>

      <input type="file" name="foto" accept="image/*" required>
      <button type="submit" name="add_candidato">Cadastrar</button>
      <?php
      if(isset($_GET["success"])){
        echo "<div class='mensagem-box'><p class='mensagem'>Usuário cadastrado com sucesso!</p></div>";
      }
      ?>
    </form>


    <div class="candidatos-lista">
      <h2>Candidatos Cadastrados</h2>

      <?php
      $resultado = $conexao->query("SELECT * FROM candidates WHERE removed_at IS NULL");

      while ($candidato = $resultado->fetch_assoc()) {
        echo "<div class='card'>";
        echo "<img src='{$candidato['imagem']}' alt='' onerror=\"this.onerror=null; this.src='uploads/user0.webp';\">";
        echo "<p><strong>{$candidato['nome']}</strong> ({$candidato['category']})</p>";
        echo "<form method='post' onsubmit=\"return confirm('Tem certeza que deseja remover este candidato?');\">";
        echo "<input type='hidden' name='delete_id' value='{$candidato['id']}'>";
        echo "<button type='submit'>Remover</button>";
        echo "</form>";
        echo "</div>";
      }
      $conexao->close();
      ?>
    </div>

  </div>



</body>

</html>