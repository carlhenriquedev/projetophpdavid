<?php

include_once("subs/candidatos.php");


if ($_SERVER["REQUEST_METHOD"] === "POST") {
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

$conexao->close();
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
</head>
<body>

  <form action="admin.php" method="post" enctype="multipart/form-data">
    <input type="text" name="nome" placeholder="Nome do candidato" required>
    
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
  
</body>
</html>

