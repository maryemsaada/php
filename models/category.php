<?php

class Category {
    private  $categoryName, $image;

    function __construct( $categoryName = "", $image = "") {
        $this-> categoryName =  $categoryName;
        $this->image = $image;
       
    }


    public function getcategoryName(){
        return $this->categoryName;
    }


    public function getImage(){   
        return $this->image;
    }
    public function setcategoryName($categoryName){
        $this->categoryName = $categoryName;
    }

    public function setImage($image){
        $this->image= $image;
    }
}
?>
