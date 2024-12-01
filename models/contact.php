<?php

class contact {
    private $name, $email, $message,$subject;

    function __construct($name = "", $email = "", $message= "",$subject= "") {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
        $this->subject= $subject;

    }

    public function getname(){
        return $this->name;
    }


    public function getEmail(){
        return $this->email;
    }

    public function getmessage(){
        return $this->message;
    }
    public function getsubject(){
        return $this->subject;
    }

    public function setname($name){
        $this->name = $name;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function setmessage($message){
         $this->message = $message;
    }

    public function setsubject($subject){
        $this->subject = $subject;
    }
}

?>