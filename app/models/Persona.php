<?php

require_once(__DIR__ . '/../config/Database.php');
require_once(__DIR__ . '/../entities/Persona.entidad.php');

class Persona {
    private $pdo = null;

    public function __construct() {
        $this->pdo = Database::getConexion();
    }

    public function getAll() {
        $sql = "
          SELECT
            idpersona,
            nombres,
            apellidos,
            dni,
            email
          FROM personas
          ORDER BY apellidos, nombres
        ";
        $query = $this->pdo->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    // Puedes agregar otros métodos como create, update, delete si los necesitas.
}
