<?php

namespace Daw;

// Class Reserves
class Subscribes {

    private $sql;

    // Constructor
    public function __construct($sql) {
        $this->sql = $sql;
    }
   
    public function doSubscribes($nom, $cognoms, $data_naixement, $addres) {
        $query = "INSERT INTO subscribers (Nom, Cognoms, Data_naixement, Addres) VALUES (:nom, :cognoms, :data_naixement, :addres)";
        $stmt = $this->sql->prepare($query);
        $stmt->execute([
            ':nom' => $nom,
            ':cognoms' => $cognoms,
            ':data_naixement' => $data_naixement,
            ':addres' => $addres
        ]);

        // Puedes devolver un resultado según tus necesidades
        return $stmt->rowCount(); // Número de filas afectadas
    }


    public function getAllSubscribers() {
        $query = "SELECT * FROM subscribers"; // Cambié "apartment" a "subscribers"
        $stmt = $this->sql->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }
    public function confirmSubscription() {
        
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }


}

?>