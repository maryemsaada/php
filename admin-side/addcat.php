<?php

include_once('../models/category.php');
include_once('../controllers/categoryController.php');


$categoryName= $_POST['categoryName'];
$image= $_POST['image'];


$category=new category($categoryName,$image);
$categoryController = new categoryController();
$res = $categoryController->insert( $category);
header('Location: categorylist.php');


?>