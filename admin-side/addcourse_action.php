<?php

include_once('../models/courses.php');
include_once('../controllers/coursesController.php');

$courseName = $_POST["courseName"];
$description = $_POST['description'];
$categoryName= $_POST['categoryName'];
$image= $_POST['image'];



$coursesController = new coursesController();
$res = $coursesController->insert($courseName, $description, $categoryName, $image);


header('Location: listecourses.php');

?>
