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

$sql = "SELECT id, nome, categoria, imagem FROM candidatos ORDER BY categoria, nome";
$result = $conexao->query($sql);

if ($result) {
    while ($row = $result->fetch_assoc()) {
        $categoria = $row['categoria'];
        if (isset($candidatos[$categoria])) {
            $candidatos[$categoria][] = [
                'id'     => $row['id'],
                'nome'   => $row['nome'],
                'imagem' => $row['imagem']
            ];
        }
    }
} else {
    echo "Erro na consulta: " . $conexao->error;
}

?>
