<?php

//start session
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $users = ["Admin", "Seller", "Customer"];
    $pass = ["Admin123", "Seller123", "Customer123"];
    $roles = ["admin", "seller", "customer"];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $key = array_search($username, $users);

    if ($key !== false) {
        if ($pass[$key] === $password) {
            $role = $roles[$key];
            if ($role === "admin") {
                $_SESSION["admin"] = $role;
                header("Location: ../pages/processes/billing.php");
                exit();
            } elseif ($role === "seller") {
                $_SESSION["seller"] = $role;
                header("Location: ../pages/seller.php");
                exit();
            } elseif ($role === "customer") {
                $_SESSION["customer"] = $role;
                header("Location: customer_page.php");
                exit();
            }
        } else {
            echo "<h3>Username or password are incorrect.</h3> <br/>
            <a href='../pages/sign/sign-in.php'>Go back<a/>
            ";
        }
    } else {
        echo "<h3>Username or password are incorrect.</h3> <br/>
        <a href='../pages/sign/sign-in.php'>Go back<a/>";
    }
}

?>