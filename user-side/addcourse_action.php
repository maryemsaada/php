<?php

include_once("../controllers/blogController.php");
include_once("../models/blog.php");

    $coursename = $_POST['coursename'];
    $description = $_POST['description'];
    $image= $_POST['image'];


    $blog = new blog($coursename, $description, $image);
    $blogController = new blogController();

    $inserted = $blogController->insert($blog);

  
    if ($inserted) {
        header('Location: blog.php');
    } else {
        echo "Failed to insert data into the database.";
    }
?>
