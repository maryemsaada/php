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
        
        $_SESSION ['userid']= $row['userid'];
        $_SESSION ['username'] = $username;
        if($row['userrole'] === "admin"){
            echo"<script>alert('you don't have access!!');</script>";
        }else{
            header('Location: index.html');
            exit;}
    }
     else {
        echo"<script>alert('Invalid username or password. Please try again.');</script>";
      
        echo $verify -> rowCount();}
             

?>


