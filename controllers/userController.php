<?php

include_once('../models/user.php');
include_once('../database/config.php');

class UserController extends Connexion {
    function __construct() {
        parent::__construct();
    }

    function insert(User $u) {
        $query = "INSERT INTO user(username, email, `password`) VALUES (?, ?, ?)";
        $res = $this->pdo->prepare($query);

        $array = array($u->getUsername(), $u->getEmail(), $u->getPassword());
        return $res->execute($array);
    }

    function getUser($id) {
        $query = "SELECT * FROM user WHERE userid = ?";
        $res = $this->pdo->prepare($query);
        $res->execute(array($id));
        $array = $res->fetch();
        return $array;
    }

    function getUsername($username) {
        $query = "SELECT * FROM user WHERE username = ?";
        $res = $this->pdo->prepare($query);
        $res->execute(array($username));
        $array = $res->fetch();
        return $array;
    }

    function Verify_password($username,$password) {
        $query = "SELECT * FROM user where username = '$username' and password = '$password' ";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res;
    }

    function delete($id) {
        $query = "DELETE FROM user WHERE userid=?";
        $res = $this->pdo->prepare($query);
        return $res->execute(array($id));
    }

    function userList() {
        $query = "SELECT * FROM user";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res;
    }

    function updateUser(User $u) {
        $sql = "UPDATE user SET username=?, email=?, `password`=? WHERE userid=?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(array(
            $u->getUsername(), 
            $u->getEmail(), 
            $u->getPassword(), 
            $u->getId()
        ));
    }
}
?>