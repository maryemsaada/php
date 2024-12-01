<?php

require_once('../models/category.php');
require_once('../controllers/categoryController.php');

$categoryController = new categoryController();
$category = new category();

$category->setcategoryName($_POST['categoryName']);
$category->setImage($_POST['image']);

$result =$categoryController->updateCategory($category);

header('Location: categorylist.php');
exit();

?>
