<?php

include_once('../models/category.php');
include_once('../database/config.php');

class CategoryController extends Connexion {
    function __construct() {
        parent::__construct();
    }

    function insert(Category $c) {
        $query = "INSERT INTO category(categoryName,`image`) VALUES (?,?)";
        $res = $this->pdo->prepare($query);

        $array = array( $c->getcategoryName(),$c->getImage());
        return $res->execute($array);
    }

    function getCategory($categoryName) {
        $query = "SELECT * FROM category WHERE categoryName = ?";
        $res = $this->pdo->prepare($query);
        $res->execute(array($categoryName));
        $array = $res->fetch();
        return $array;
    }

    function delete($categoryName) {
        $query = "DELETE FROM category WHERE categoryName=?";
        $res = $this->pdo->prepare($query);
        return $res->execute(array($categoryName));
    }

    function categoriesList() {
        $query = "SELECT * FROM category";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res;
    }

    function updateCategory(Category $c) {
        $sql = "UPDATE category SET `categoryName`=?, `image`=? WHERE categoryName=?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(array($c->getcategoryName(), $c->getImage(), $c->getcategoryName()));
    }
    
}

?>
