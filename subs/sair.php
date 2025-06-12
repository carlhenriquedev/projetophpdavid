<?php
session_start();

unset($_SESSION["id"]);
unset($_SESSION["email"]);
unset($_SESSION["password_hash"]);
unset($_SESSION["is_admin"]);
header("Location: ../index.php");