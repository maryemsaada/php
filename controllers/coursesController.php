<?php

include_once('../models/courses.php');
include_once('../database/config.php');

class coursesController extends Connexion {
    function __construct() {
        parent::__construct();
    }

    function insert($courseName, $description, $CategoryName, $image)
{
    $query = "INSERT INTO course ( `courseName`, `description`, CategoryName,`image`) VALUES (?, ?, ?, ?)";
    $res = $this->pdo->prepare($query);
    $res->execute(array($courseName, $description, $CategoryName, $image));
    return $res;
}


    function getCourse($id) {
        $query = "SELECT * FROM course WHERE idCourse = ?";
        $res = $this->pdo->prepare($query);
        $res->execute(array($id));
        $array = $res->fetch();
        return $array;
    }

    function delete($idCourse) {
        $query = "DELETE FROM course WHERE idCourse=?";
        $res = $this->pdo->prepare($query);
        return $res->execute(array($idCourse));
    }

    function coursesList() {
        $query = "SELECT c.*, ct.categoryName 
                  FROM course c 
                  LEFT JOIN category ct ON c.CategoryName = ct.categoryName";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res->fetchAll(); 
    }
    
   

    function updateCourse(course $c) {
        $sql = "UPDATE course SET `courseName`=?,`description`=?,`image`=?,`CategoryName`=? WHERE idCourse=?";
        $res = $this->pdo->prepare($sql);
        $res->execute(array(
            $c->getcourseName(),
            $c->getdescription(),
            $c->getimage(),
            $c->getCategoryName(),
            $c->getIdCourse()

        ));
    }
    

    function rechercheCategory($CategoryName){
        $query = "select * from course where CategoryName='".$CategoryName."'";
        $res=$this->pdo->prepare($query);
        $res->execute();
        return $res;
    }
}

?>
