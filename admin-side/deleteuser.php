<?php

include_once('../models/user.php');
include_once('../controllers/userController.php');

$userController = new UserController();

$id = $_GET['userid'];

if (isset($_GET['confirm']) && $_GET['confirm'] == 'true') {

    $result = $userController->delete($id);

    if ($result) {
        header('Location: userslist.php');
        exit();
    } else {
        echo "Failed to delete user.";
    }
}
?>
