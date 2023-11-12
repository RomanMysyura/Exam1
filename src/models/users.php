<?php

namespace Daw;

// Class Users
class Users {

    private $sql;

    // Constructor
    public function __construct($sql){
        $this->sql = $sql;
    }

    // Función para hacer login con el usuario 
    public function login($email, $password){
        $query = "SELECT * FROM users WHERE email = :email AND password = :password";
        $stmt = $this->sql->prepare($query);
        $stmt->execute([':email' => $email, ':password' => $password]);
        $result = $stmt->fetch(\PDO::FETCH_ASSOC);

        return $result; // Puedes modificar esto según tus necesidades
    }
}

?>
