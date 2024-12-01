<?php

include_once("../controllers/userController.php");
include_once("../models/user.php");

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = new user($username, $email, $password);
    $userController = new userController();

    $inserted = $userController->insert($user);

    if ($inserted) {
        header('Location: login.html');
    } else {
        echo "Failed to insert data into the database.";
    }
?>
