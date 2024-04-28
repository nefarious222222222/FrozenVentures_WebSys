<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: ../sign/sign-in.php");
    exit;
}

?>