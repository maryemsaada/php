<?php

include_once('../models/contact.php');
include_once('../database/config.php');

class contactController extends Connexion {
    function __construct() {
        parent::__construct();
    }

    function insert(contact $c) {
        $query = "INSERT INTO contact(`name`, `email`, `message`,`subject`) VALUES (?, ?, ?,?)";
        $res = $this->pdo->prepare($query);

        $array = array($c->getname(), $c->getEmail(), $c->getmessage(),$c->getsubject());
        return $res->execute($array);
    }

    

    function delete($name) {
        $query = "DELETE FROM contact WHERE `name`=?";
        $res = $this->pdo->prepare($query);
        return $res->execute(array($name));
    }

    function contactList() {
        $query = "SELECT * FROM contact";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res;
    }

   
}
?>