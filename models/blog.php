<?php

class blog {
    private $coursename, $description, $image;

    function __construct($coursename = "", $description = "", $image= "") {
        $this->coursename = $coursename;
        $this->description = $description;
        $this->image = $image;
       

    }

    public function getcoursename(){
        return $this->coursename;
    }


    public function getdescription(){
        return $this->description;
    }

    public function getimage(){
        return $this->image;
    }
   

    public function setcoursename($coursename){
        $this->coursename = $coursename;
    }

    public function setdescription($description){
        $this->description = $description;
    }

    public function setimage($image){
         $this->image = $image;
    }


}

?>