<?php

include_once('../models/contact.php');
include_once('../controllers/contactController.php');

$contactController = new contactController();

$name = $_GET['name'];

if (isset($_GET['confirm']) && $_GET['confirm'] == 'true') {

    $result = $contactController->delete($name);

    if ($result) {
        header('Location: listecontact.php');
        exit();
    } else {
        echo "Failed to delete a contact.";
    }
}
?>
