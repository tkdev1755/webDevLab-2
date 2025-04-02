<?php

namespace model;
require_once __DIR__ . '/../core/Database.php'; // Inclusion du modèle User

use Database;
use PDO;

class User
{
    private $id;
    private $name;
    private $email;

    public function __construct($id, $name, $email){
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }


    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getEmail(){
        return $this->email;
    }

    public static function login($email, $password){
        $db = Database::getConnection();
        $stmt = $db->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->bindParam(":email", $email);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && sha1($password) == $user['password']) {
            // Aware of SHA1 security risks, only using it for this lab
            session_start();
            echo "Auth successful";
            $_SESSION['id'] = $user['id'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['connected'] = $user['connected'];
            return new User($user['id'], $user['name'], $user['email']);
        }

        return null;


    }

}