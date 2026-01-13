<?php 
require "../Models/User.php";

class AuthController{
    private $conn;

    function __construct($conn)
    {
        $this->conn = $conn;
    }

    function authUser(){
        $handler = new User();
        $handler->setFirstName($_POST["first_name"]);
        $handler->setLastName($_POST["last_name"]);
        $handler->setEmail($_POST["email"]);
        $handler->setPassword($_POST["password"]);

    }
}

$classHandler = new AuthController($conn);
$classHandler->authUser();