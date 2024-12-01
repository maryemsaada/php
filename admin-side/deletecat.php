<?php

include_once('../controllers/categoryController.php');

$categoryController = new categoryController();

if (isset($_GET['categoryName']) && isset($_GET['confirm']) && $_GET['confirm'] == 'true') {
    $categoryName = $_GET['categoryName'];
    $res = $categoryController->delete($categoryName);

    header('Location: categorylist.php');
    exit();
}
?>
 