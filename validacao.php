<?php

    session_start();


    if(isset($_POST['submit']) && empty($_POST['email']) && empty($_POST['password_hash'])) {

        header("Location: login.php");

    }

    else {
        include("connection.php");
        
        $email = $_POST['email'];
        $password = $_POST['password_hash'];

        $sql = "SELECT * FROM users WHERE email = '$email' AND password_hash = '$password'";

        $result = $conexao -> query($sql);

        if (mysqli_num_rows($result) == 0) {

            unset($_SESSION["email"]);
            unset($_SESSION["password_hash"]);
            header("Location: login.php");

        } else {

            $_SESSION["email"] = $email;
            $_SESSION["password_hash"] = $passwordHash;
            header("Location: dashboard.php");
        }
    }

?>