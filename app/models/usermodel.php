<?php

class userModel{
    private $db;
    
    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_libros;charset=utf8', 'root', '');
    }

    public function getUserByEmail($email) {
        $query = $this->db->prepare("SELECT * FROM cliente WHERE email = ?");
        $query->execute([$email]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function getUserByname($Nombre) {
        $query = $this->db->prepare("SELECT * FROM cliente WHERE Nombre = ?");
        $query->execute([$Nombre]);
        return $query->fetch(PDO::FETCH_OBJ);
    }


}

?>