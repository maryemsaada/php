<?php

require_once('../models/user.php');
require_once('../controllers/userController.php');

$userController = new UserController();
$user = new User();

$user->setId($_POST['id']);
$user->setUsername($_POST['username']);
$user->setEmail($_POST['email']);
$user->setPassword($_POST['password']);

$result = $userController->updateUser($user);

header('Location: userslist.php');
exit();

?>
