<?php
session_start();
class User{
    private PDO $conn;
    private ?int $id;
    private ?string $firstName;
    private ?string $lastName;
    private ?string $email;
    private ?string $password;

    function __construct($conn = NUll, $id = NULL, $firstName = NULL, $lastName = NULL, $email = NULL, $password = NUll)
    {
        $this->conn = $conn;
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    function createUser(){
        $sql = "INSERT INTO users (first_name, last_name, email, password, date_creation) Values (:first_name, :last_name, :email, :password, now())";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":first_name", $this->getFirstName());
        $stmt->bindValue(":last_name", $this->getLastName());
        $stmt->bindValue(":email", $this->getEmail());
        $stmt->bindValue(":password", $this->getPassword());
        $stmt->execute();
        $userId = $this->conn->lastInsertId();
        $_SESSION["id"] = $userId;
    }

    function loginUser(){
        $sql = "SELECT * FROM users WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":id", $this->getId());
        $stmt->execute();
        $user = $stmt->fetchAll(PDO::FETCH_CLASS);
    }
}