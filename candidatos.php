<?php

  include_once("config/connection.php");

$candidatos = [
  'designer'   => [],
  'frontend'   => [],
  'backend'    => [],
  'fullstack'  => [],
  'dupla'      => [],
  'resenha'    => [],
  'simpatico'  => [],
  'professor'  => []
];

$sql = "SELECT id, nome, categoria FROM candidatos ORDER BY categoria, nome";
$result = $conexao->query($sql);

if ($result) {
    while ($row = $result->fetch_assoc()) {
        // Garante que só categorias válidas sejam usadas
        if (isset($candidatos[$row['categoria']])) {
            $candidatos[$row['categoria']][] = [
                'id' => $row['id'],
                'nome' => $row['nome']
            ];
        } else {
    echo "Erro na consulta: " . $conn->error;}
        }
    }

?>
