<?php

include_once('../models/user.php');
include_once('../controllers/userController.php');

$username = $_POST["username"];
$email = $_POST['email'];
$password = $_POST['password'];

$userController = new UserController();
$result = $userController->insert(new User($username, $email, $password));

if ($result) {
    header('Location: userslist.php');
    exit();
} else {
    echo "Failed to add user.";
}
?>
