<?php
class course {
    private $idCourse, $courseName, $description, $CategoryName, $image;

    function __construct($courseName = "", $description = "", $CategoryName = "", $image = "") {
        $this->courseName = $courseName;
        $this->description = $description;
        $this->CategoryName = $CategoryName;
        $this->image = $image;
    }

   
    public function getIdCourse(){
        return $this->idCourse;
    }

    public function getCourseName(){
        return $this->courseName;
    }

    public function getDescription(){
        return $this->description;
    }

    public function getImage(){   
        return $this->image;
    }

    public function getCategoryName(){
        return $this->CategoryName;
    }

   
    public function setIdCourse($idCourse){
        $this->idCourse = $idCourse;
    }

    public function setCourseName($courseName){
        $this->courseName = $courseName;
    }

    public function setDescription($description){
        $this->description = $description;
    }

    public function setImage($image){
        $this->image= $image;
    }

    public function setCategoryName($CategoryName){
        $this->CategoryName= $CategoryName;
    }
}
?>