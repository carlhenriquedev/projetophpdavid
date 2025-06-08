<?php

include_once("subs/candidatos.php");


if ($_SERVER["REQUEST_METHOD"] === "POST") {

  if (isset($_POST['delete_id'])) {
    $idRemover = $_POST['delete_id'];

    $stmt = $conexao->prepare("UPDATE candidates SET removed_at = NOW() WHERE id = ?");
    $stmt->bind_param("i", $idRemover);
    $stmt->execute();
    $stmt->close();
  }



  $nome = $_POST["nome"];
  $categoria = $_POST["categoria"];

  $nomeImagem = basename($_FILES["foto"]["name"]);

  $nomeLimpo = iconv('UTF-8', 'ASCII//TRANSLIT', $nomeImagem);

  $nomeLimpo = preg_replace('/[^A-Za-z0-9_\-\.]/', '', $nomeLimpo);

  $nomeLimpo = str_replace(' ', '_', $nomeLimpo);

  $caminhoFinal = "uploads/" . $nomeLimpo;

  move_uploaded_file($_FILES["foto"]["tmp_name"], $caminhoFinal);

  $stmt = $conexao->prepare("INSERT INTO candidates (nome, category, imagem) VALUES (?, ?, ?)");
  $stmt->bind_param("sss", $nome, $categoria, $caminhoFinal);

  if ($stmt->execute()) {
    echo "Candidato cadastrado com sucesso!";
  } else {
    echo "Erro ao salvar no banco: " . $stmt->error;
  }
  $stmt->close();

}
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/admin.css">

  <title>Admin</title>
</head>
<body>

<header>
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
    <button type="submit">Cadastrar</button>
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