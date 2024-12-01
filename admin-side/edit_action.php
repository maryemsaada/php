<?php
require_once('../controllers/coursesController.php');
require_once('../models/courses.php');

if(isset($_POST['update'])) {
    $coursesController = new coursesController();
    
    $id = $_POST['id'];
    $courseName = $_POST['courseName'];
    $description = $_POST['description'];
    $categoryName = $_POST['categoryName'];
    $image = $_POST['image'];
    $course = new course($courseName, $description, $categoryName, $image);
    $course->setIdCourse($id);

    $coursesController->updateCourse($course);

    header('Location: listecourses.php');
    exit();
}
?>
