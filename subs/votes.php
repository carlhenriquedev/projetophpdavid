<?php
session_start();
require_once("../config/connection.php");

$usuario_id = $_SESSION['id'];

$stmt = $conexao->prepare("DELETE FROM votes WHERE user_id = ?");
$stmt->bind_param("i", $usuario_id);
$stmt->execute();

foreach ($_POST as $categoria => $candidato_id) {
  $candidato_id = (int) $candidato_id;

  $stmt = $conexao->prepare("
    INSERT INTO votes (user_id, category, candidate_id)
    VALUES (?, ?, ?)
  ");
  $stmt->bind_param("isi", $usuario_id, $categoria, $candidato_id);
  $stmt->execute();
}

echo "<p style='color: green;'>Votos atualizados com sucesso!</p>";
echo "<a href='../dashboard.php'>Voltar</a>";