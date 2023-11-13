<?php

namespace Daw;

// Class Users
class Users {

    private $sql;

    // Constructor
    public function __construct($sql){
        $this->sql = $sql;
    }

    public function verifyCode($code) {
        $sql = "SELECT * FROM codes WHERE code = :code";
        $stmt = $this->sql->prepare($sql);
        $stmt->bindParam(':code', $code);
        $stmt->execute();
    
        $result = $stmt->fetch(\PDO::FETCH_ASSOC);
    
        // Devolver true si se encontró el código, false si no se encontró
        return ($result !== false); 
    }
    
    
}
?>