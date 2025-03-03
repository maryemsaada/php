<?php

class User {
    private $username, $email, $password;

    function __construct($username = "", $email = "", $password = "") {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    public function getId(){
        return $this->userid;
    }

    public function getUsername(){
        return $this->username;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setUsername($username){
        $this->username = $username;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function setPassword($password){
         $this->password = $password;
    }

    public function setId($userid){
        $this->userid = $userid;
    }
}

?>