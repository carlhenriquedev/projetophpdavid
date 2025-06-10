<?php
session_start();

require_once("../config/connection.php");

foreach ($_POST as $categoria => $candidato_id) {

  $candidato_id = (int) $candidato_id;
  $usuario_id = $_SESSION['id'];


  $stmt = $conexao->prepare(
    "INSERT INTO votes (user_id, category, candidate_id)
        VALUES (?, ?, ?)
        ON DUPLICATE KEY UPDATE candidate_id = VALUES(candidate_id)"
  );

  $stmt->bind_param("isi", $usuario_id, $categoria, $candidato_id);
  $stmt->execute();
}

echo "Votos registrados com sucesso!";
