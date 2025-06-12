<?php

session_start();


if (isset($_POST['submit']) && empty($_POST['email']) && empty($_POST['password_hash'])) {

    header("Location: ../login.php");
} else {
    include("../config/connection.php");

    $email = $_POST['email'];
    $password = $_POST['password_hash'];

    $sql = "SELECT * FROM users WHERE email = '$email' AND password_hash = '$password'";

    $result = $conexao->query($sql);
    $usuario = $result->fetch_assoc();

    if (mysqli_num_rows($result) == 0) {

        unset($_SESSION["id"]);
        unset($_SESSION["email"]);
        unset($_SESSION["password_hash"]);
        unset($_SESSION["is_admin"]);
        header("Location: ../login.php");
    } else {

        $_SESSION["email"] = $email;
        $_SESSION["password_hash"] = $password;
        $_SESSION["id"] = $usuario["id"];
        $_SESSION["is_admin"] = $usuario["is_admin"]; 
        header("Location: ../dashboard.php");
    }
}
