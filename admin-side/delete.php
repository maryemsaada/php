<?php

include_once('../controllers/coursesController.php');

$coursesController = new coursesController();

if (isset($_GET['idCourse']) && isset($_GET['confirm']) && $_GET['confirm'] == 'true') {
    $idCourse = $_GET['idCourse'];
    $res = $coursesController->delete($idCourse);

    header('Location: listecourses.php');
    exit();
}
?>
