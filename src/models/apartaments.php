<?php

namespace Daw;

// Classe Apartaments
class Apartaments {

    private $sql;

    // Constructor
    public function __construct($sql) {
        $this->sql = $sql;
    }

    // Funció per obtenir tots els apartaments
    public function getAll() {
        $query = "SELECT * FROM apartment";
        $stmt = $this->sql->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }
    
}

?>
