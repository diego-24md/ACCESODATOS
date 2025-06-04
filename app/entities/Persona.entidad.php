<?php
class PersonaEntidad {
    private $idpersona;
    private $nombres;
    private $apellidos;
    private $dni;
    private $email;

    public function __GET($k){ return $this->$k; }
    public function __SET($k, $v){ $this->$k = $v; }
}
