<?php

//start session
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "Admin" && $password == "Admin123"){
        $_SESSION['valid'] = $username;
        header("location: ../pages/processes/billing.php");
    }
    else{
        echo "Wrong password";
    }

}

?>