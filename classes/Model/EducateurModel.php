<?php

class EducateurModel extends LicenceModel {
    private $email;
    private $motDePasse;
    private $isAdmin;

    public function __construct($numeroLicence, $nom, $prenom,$contact, $email, $motDePasse, $isAdmin) {
        parent::__construct($numeroLicence, $nom, $prenom,$contact);
        $this->email = $email;
        $this->motDePasse = $motDePasse;
        $this->isAdmin = $isAdmin;
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
        $this->email = $email;
    }

    public function setMotDePasse($motDePasse) {
        $this->motDePasse = $motDePasse;
    }

    public function setIsAdmin($isAdmin) {
        $this->isAdmin = $isAdmin;
    }
}


?>

