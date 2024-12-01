<?php

include_once("../controllers/contactController.php");
include_once("../models/contact.php");

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message= $_POST['message'];
    $subject= $_POST['subject'];


    $contact = new contact($name, $email, $message,$subject);
    $contactController = new contactController();

    $inserted = $contactController->insert($contact);

  
    if ($inserted) {
        header('Location: index.html');
    } else {
        echo "Failed to insert data into the database.";
    }
?>
