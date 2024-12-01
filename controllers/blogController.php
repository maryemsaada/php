<?php

include_once('../models/blog.php');
include_once('../database/config.php');

class blogController extends Connexion {
    function __construct() {
        parent::__construct();
    }

    function insert(blog $b) {
        $query = "INSERT INTO blog(`coursename`, `description`, `image`) VALUES (?, ?, ?)";
        $res = $this->pdo->prepare($query);

        $array = array($b->getcoursename(), $b->getdescription(), $b->getimage());
        return $res->execute($array);
    }

    

    function delete($coursename) {
        $query = "DELETE FROM blog WHERE `coursename`=?";
        $res = $this->pdo->prepare($query);
        return $res->execute(array($coursename));
    }

    function blogList() {
        $query = "SELECT * FROM blog";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res;
    }

   
}
?>