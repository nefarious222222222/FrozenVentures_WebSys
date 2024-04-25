<?php
session_start();

// Destroy the session
session_destroy();

// Redirect to the login page or any other desired page
header("Location: ../pages/sign/sign-in.php");
exit();
?>