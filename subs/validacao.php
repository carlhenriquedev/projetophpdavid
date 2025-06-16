<?php

session_start();


if (isset($_POST['submit']) && empty($_POST['email']) && empty($_POST['password_hash'])) {
    $_SESSION["mensagem"] = "Preencha os campos";
    header("Location: ../login.php");
    exit;
}

include("../config/connection.php");

$email = $_POST['email'];
$password = $_POST['password_hash'];

$sql = "SELECT * FROM users WHERE email = '$email'";

$result = $conexao->query($sql);

if ($result->num_rows == 0) {
    $_SESSION["mensagem"] = "E-mail não encontrado:";
    header("Location: ../login.php");
    exit;
}
   
$usuario = $result->fetch_assoc();

if ($usuario["password_hash"] !== $password) {
    $_SESSION["mensagem"] = "Senha incorreta:";
    header("Location: ../login.php");
    exit;
}

$_SESSION["email"] = $email;
$_SESSION["password_hash"] = $password;
$_SESSION["nome"] = $usuario["username"];
$_SESSION["id"] = $usuario["id"];
$_SESSION["is_admin"] = $usuario["is_admin"]; 
header("Location: ../dashboard.php");
exit;