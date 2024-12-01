<?php
session_start();

include_once("../controllers/userController.php");
include_once("../models/user.php");

    $username = $_POST['username'];
    $password = $_POST['password'];

    $usercontroller = new UserController();
    $verify = $usercontroller->Verify_password($username, $password);


    if ($verify -> rowCount() == 1) {
        $row = $usercontroller ->getUsername($username);
        
        $_SESSION ['userrole']= $row['userrole'];
        $_SESSION ['username'] = $username;
        if($row['userrole'] === "admin"){
            header('Location: listecourses.php');
        }
     
    } else {
        echo "Invalid username or password. Please try again.";
        echo $verify -> rowCount();
    }          

?>


