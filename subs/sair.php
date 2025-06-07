<?php
    session_start();

    unset($_SESSION["id"]);
    unset($_SESSION["email"]);
    unset($_SESSION["password_hash"]);
    header("Location: ../index.php");
?>