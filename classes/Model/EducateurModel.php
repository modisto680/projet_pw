<?php

class EducateurModel extends LicencieModel {
    private $email;
    private $motDePasse;
    private $isAdmin;


    public function __construct($email, $motDePasse, $isAdmin) {

        $this->email = $email;

        $this->motDePasse = $motDePasse;

        $this->isAdmin= $isAdmin;

    }

    public function getEmail() {

        return $this->email;

    }

    public function getMotDePasse() {

        return $this->motDePasse;

    }

    public function getIsAdmin() {

        return $this->isAdmin;

    }

    public function setEmail($email) {

        $this->email=$email;

    }

    public function setMotDePass($motDePasse) {

        $this->nom=$motDePasse;

    }

    public function setIsAdmin($isAdmin) {

        $this->isAdmin=$isAdmin;

    }
    
}

?>


    
}

?>

